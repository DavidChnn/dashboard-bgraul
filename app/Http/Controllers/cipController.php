<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\CIP;
use App\Models\User;
use App\Models\MasterAssetCategory;
use App\Models\MasterAssetStatus;
use App\Models\MasterCostCentre;
use App\Models\MasterLine;
use App\Models\MasterSite;
use App\Models\MasterUom;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Exports\RequestCIP;
use App\Exports\ConfirmationCIP;
use App\Exports\OutstandingCIP;
use App\Exports\OutstandingUserCIP;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationEmail;

class cipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CIP::where('statusRequest', 'Not Confirm')
            ->orderBy('id', 'asc')
            ->paginate(25);
        return view('cip/request')->with('data', $data);
    }
    public function indexUser()
    {
        $data = CIP::whereIn('statusRequest', ['Not Confirm', 'Reject'])
            ->where('user',  Auth::user()->name)
            ->orderBy('id', 'asc')
            ->paginate(25);
        return view('cip/user/request')->with('data', $data);
    }

    public function detail(string $id)
    {
        $data = CIP::where('id', $id)->first();
        return view('cip/confirmrequest')->with('data', $data);
    }

    public function storeConfirm(request $request, $id)
    {

        if ($request->statusRequestInput == 'Reject') {
            $data = [
                'statusRequest' => $request->statusRequestInput,
            ];
            CIP::where('id', $id)->update($data);
            return redirect('cip/request');
        }

        $data = [
            'cipNumber' => $request->cipNumber,
            'statusRequest' => $request->statusRequestInput,
        ];
        CIP::where('id', $id)->update($data);

        return redirect('cip/request');
    }

    public function requestRevisi(string $id)
    {
        $category = MasterAssetCategory::select('assetCategory')->distinct()->get();
        $class = MasterAssetCategory::select('assetClass')->distinct()->get();
        $group = MasterAssetCategory::all();

        $status = MasterAssetStatus::select('status')->distinct()->get();
        $dept = MasterCostCentre::select('dept')->distinct()->get();
        $costCentre = MasterCostCentre::all();
        $line = MasterLine::all();
        $site = MasterSite::select('name')->distinct()->get();
        $uom = MasterUom::select('name')->distinct()->get();
        $data = CIP::where('id', $id)->first();
        $depreciation = MasterAssetCategory::where('assetGroup', $data->assetGroup)->first();

        return view('cip/user/requestrevisi')
            ->with('data', $data)
            ->with('category', $category)
            ->with('class', $class)
            ->with('group', $group)
            ->with('status', $status)
            ->with('dept', $dept)
            ->with('costCentre', $costCentre)
            ->with('line', $line)
            ->with('site', $site)
            ->with('uom', $uom)
            ->with('depreciation', $depreciation);
    }



    public function statusConfirm($id)
    {

        Log::info("Status confirmation called for ID: $id");

        $data = [
            'statusConfirmation' => true,
        ];
        CIP::where('id', $id)->update($data);

        return redirect('cip/user/confirmation');
    }

    public function outstandingConfirm(request $request, string $id)
    {

        $category = MasterAssetCategory::select('assetCategory')->distinct()->get();
        $class = MasterAssetCategory::select('assetClass')->distinct()->get();
        $group = MasterAssetCategory::all();
        $status = MasterAssetStatus::select('status')->distinct()->get();
        $dept = MasterCostCentre::select('dept')->distinct()->get();
        $costCentre = MasterCostCentre::all();
        $line = MasterLine::all();
        $site = MasterSite::select('name')->distinct()->get();
        $data = Asset::where('id', $id)->first();
        $depre = MasterAssetCategory::where('assetGroup', $data->assetGroup)->first();
        $uom = MasterUom::select('name')->distinct()->get();



        return view('cip/addasset')
            ->with('data', $data)
            ->with('uom', $uom)
            ->with('depre', $depre)
            ->with('site', $site)
            ->with('line', $line)
            ->with('dept', $dept)
            ->with('status', $status)
            ->with('group', $group)
            ->with('class', $class)
            ->with('category', $category)
            ->with('costCentre', $costCentre);
    }
    public function cipToAsset(request $request, string $id)
    {
        if ($request->file('assetPicture')){
            $foto_file = $request->file('assetPicture');
            $foto_eks = $foto_file->getClientOriginalExtension();
            $foto_nama = date('ymdhis') . "." . $foto_eks;
            $foto_file->move(public_path('foto'), $foto_nama);
            $updata = [
                'assetPicture' => $foto_nama,
            ];
            Asset::where('id', $id)->update($updata);
        };


        $data = [
            'assetCodeAccounting' => $request->input('assetCodeAccounting'),
            'assetCodeEnginery' => $request->input('assetCodeEnginery'),
            'assetCategory' => $request->input('assetCategoryInput'),
            'assetClass' => $request->input('assetClassInput'),
            'assetGroup' => $request->input('assetGroupInput'),
            'assetDescription' => $request->input('assetDescription'),
            'subAsset' => $request->input('subAsset'),
            'picAsset' => $request->input('picAsset'),
            'acquisitionCIP' => $request->input('acquisitionCIP'),
            'depreciationStart' => $request->input('depreciationStart'),
            'depreciationEnd' => $request->input('depreciationEnd'),
            'currentBookValue' => $request->input('currentBookValue'),
            'assetCondition' => $request->input('assetConditionInput'),
            'assetStatus' => $request->input('assetStatusInput'),
            'costCenter' => $request->input('costCentreInput'),
            'product' => $request->input('product'),
            'department' => $request->input('departmentInput'),
            'departmentDetail' => $request->input('deptDetailInput'),
            'vendor' => $request->input('vendor'),
            'site' => $request->input('siteInput'),
            'line' => $request->input('line'),
            'proccess' => $request->input('proccess'),
            'quantity' => $request->input('quantity'),
            'quantityInput' => $request->input('quantity'),
            'uom' => $request->input('uomInput'),
            'acquisitionValue' => $request->input('acquisitionValue'),
            'cipNumber' => $request->input('cipNumber'),
            'budgetNumber' => $request->input('budgetNumber'),
            'poNumber' => $request->input('poNumber'),
            'user' => Auth::user()->name,
            'cipStatus' => false

        ];
        Asset::where('id', $id)->update($data);

        return redirect('/');
    }

    public function outstandingConfirmUser(request $request)
    {

        // Log::info("Status confirmation called for ID: $id");
        $ids = $request->input('ids', []);
        $id = $ids[0];
        $count = count($ids);
        $uom = MasterUom::select('name')->distinct()->get();
        $category = MasterAssetCategory::select('assetCategory')->distinct()->get();
        $class = MasterAssetCategory::select('assetClass')->distinct()->get();
        $group = MasterAssetCategory::all();
        $status = MasterAssetStatus::select('status')->distinct()->get();
        $dept = MasterCostCentre::select('dept')->distinct()->get();
        $costCentre = MasterCostCentre::all();
        $line = MasterLine::all();
        $site = MasterSite::select('name')->distinct()->get();

        $sum = 0;
        foreach ($ids as $id) {
            $datas = CIP::where('id', $id)->first();
            $sum = $sum + $datas->currentBookValue;
        }

        $data = CIP::where('id', $id)->first();
        $depre = MasterAssetCategory::where('assetGroup', $data->assetGroup)->first();


        for ($i = 1; $i < $count; $i++) {
            $cip1 = CIP::where('id', $ids[$i])->first();
            $cip2 = CIP::where('id', $ids[$i - 1])->first();
            // Log::info("Status confirmation called for ID: $cip1");
            if ($cip1->assetCodeEnginery != $cip2->assetCodeEnginery) {
                return redirect('/cip/user/outstanding')->with('message', 'Pastikan inventory number sama');
            }
        }


        return view('cip/user/merge')
            ->with('data', $data)
            ->with('uom', $uom)
            ->with('depre', $depre)
            ->with('site', $site)
            ->with('line', $line)
            ->with('dept', $dept)
            ->with('status', $status)
            ->with('group', $group)
            ->with('class', $class)
            ->with('category', $category)
            ->with('costCentre', $costCentre)
            ->with('sum', $sum)
            ->with('ids', $ids)
            ->with('count', $count);



        // return view('cip/user/merge')
        //     ->with('data', $data)
        //     ->with('sum', $sum)
        //     ->with('ids', $ids)
        //     ->with('uom', $uom)
        //     ->with('depre', $depre)
        //     ->with('count', $count);
    }
    public function mergeCip(request $request)
    {

        $ids = $request->input('ids');
        $idsArray = explode(',', $ids);

        if ($request->file('assetPicture')){
            $foto_file = $request->file('assetPicture');
            $foto_eks = $foto_file->getClientOriginalExtension();
            $foto_nama = date('ymdhis') . "." . $foto_eks;
            $foto_file->move(public_path('foto'), $foto_nama);
        } else {
            $foto_nama = '';
        };



        $data = [
            'assetCodeAccounting' => $request->input('assetCodeAccounting'),
            'assetCodeEnginery' => $request->input('assetCodeEnginery'),
            'assetCategory' => $request->input('assetCategoryInput'),
            'assetClass' => $request->input('assetClassInput'),
            'assetGroup' => $request->input('assetGroupInput'),
            'assetDescription' => $request->input('assetDescription'),
            'subAsset' => $request->input('subAsset'),
            'picAsset' => $request->input('picAsset'),
            'acquisitionCIP' => $request->input('acquisitionCIP'),
            'depreciationStart' => $request->input('depreciationStart'),
            'depreciationEnd' => $request->input('depreciationEnd'),
            'currentBookValue' => $request->input('currentBookValue'),
            'assetCondition' => $request->input('assetConditionInput'),
            'assetStatus' => $request->input('assetStatusInput'),
            'costCenter' => $request->input('costCentreInput'),
            'product' => $request->input('product'),
            'department' => $request->input('departmentInput'),
            'departmentDetail' => $request->input('deptDetailInput'),
            'vendor' => $request->input('vendor'),
            'site' => $request->input('siteInput'),
            'line' => $request->input('line'),
            'proccess' => $request->input('proccess'),
            'quantity' => $request->input('quantity'),
            'quantityInput' => $request->input('quantity'),
            'uom' => $request->input('uomInput'),
            'acquisitionValue' => $request->input('acquisitionValue'),
            'cipNumber' => $request->input('cipNumber'),
            'budgetNumber' => $request->input('budgetNumber'),
            'poNumber' => $request->input('poNumber'),
            'assetPicture' => $foto_nama,
            'user' => Auth::user()->name,
            'cipStatus' => 1,
            'cipId' => $request->input('ids')
        ];
        Asset::create($data);

        foreach ($idsArray as $id) {
            $upData = [
                'outstandingStatus' => true,
            ];
            CIP::where('id', $id)->update($upData);
        }

        return redirect('cip/user/outstanding');
    }
    public function indexCon()
    {
        $data = CIP::where('statusRequest', 'Confirm')
            ->where('statusConfirmation', false)
            ->orderBy('id', 'asc')
            ->paginate(25);
        return view('cip/confirmation')->with('data', $data);
    }
    public function indexConUser()
    {
        $data = CIP::where('statusRequest', 'Confirm')
            ->where('statusConfirmation', false)
            ->where('user',  Auth::user()->name)
            ->orderBy('id', 'asc')
            ->paginate(25);
        return view('cip/user/confirmation')->with('data', $data);
    }

    public function indexOut()
    {
        $data = Asset::orderBy('id', 'asc')
            ->where('cipStatus', true)
            ->orderBy('id', 'asc')
            ->paginate(25);


        return view('cip/outstanding')->with('data', $data);
    }
    public function indexOutUser()
    {
        $data = CIP::where('statusConfirmation', true)
            ->where('outstandingStatus', false)
            ->where('user',  Auth::user()->name)
            ->orderBy('id', 'asc')
            ->paginate(25);
        return view('cip/user/outstanding')->with('data', $data);
    }

    public function create()
    {
        $category = MasterAssetCategory::select('assetCategory')->distinct()->get();
        $class = MasterAssetCategory::select('assetClass')->distinct()->get();
        $group = MasterAssetCategory::all();
        $status = MasterAssetStatus::select('status')->distinct()->get();
        $dept = MasterCostCentre::select('dept')->distinct()->get();
        $costCentre = MasterCostCentre::all();
        $line = MasterLine::all();
        $site = MasterSite::select('name')->distinct()->get();
        $uom = MasterUom::select('name')->distinct()->get();
        return view('cip/user/addrequest')
            ->with('category', $category)
            ->with('class', $class)
            ->with('group', $group)
            ->with('status', $status)
            ->with('dept', $dept)
            ->with('costCentre', $costCentre)
            ->with('line', $line)
            ->with('site', $site)
            ->with('uom', $uom);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $foto_file = $request->file('assetPicture');
        $foto_eks = $foto_file->getClientOriginalExtension();
        $foto_nama = date('ymdhis') . "." . $foto_eks;
        $foto_file->move(public_path('foto'), $foto_nama);


        $data = [
            'assetCodeEnginery' => $request->input('assetCodeEnginery'),
            'assetCategory' => $request->input('assetCategoryInput'),
            'assetClass' => $request->input('assetClassInput'),
            'assetGroup' => $request->input('assetGroupInput'),
            'assetDescription' => $request->input('assetDescription'),
            'subAsset' => $request->input('subAsset'),
            'picAsset' => $request->input('picAsset'),
            'acquisitionCIP' => $request->input('acquisitionCIP'),
            'depreciationStart' => $request->input('depreciationStart'),
            'depreciationEnd' => $request->input('depreciationEnd'),
            'currentBookValue' => $request->input('currentBookValue'),
            'assetCondition' => $request->input('assetConditionInput'),
            'assetStatus' => $request->input('assetStatusInput'),
            'costCenter' => $request->input('costCentreInput'),
            'product' => $request->input('product'),
            'department' => $request->input('departmentInput'),
            'vendor' => $request->input('vendor'),
            'site' => $request->input('siteInput'),
            'line' => $request->input('line'),
            'proccess' => $request->input('proccess'),
            'quantity' => $request->input('quantity'),
            'uom' => $request->input('uomInput'),
            'acquisitionValue' => $request->input('acquisitionValue'),
            'budgetNumber' => $request->input('budgetNumber'),
            'poNumber' => $request->input('poNumber'),
            'statusRequest' => 'Not Confirm',
            'statusConfirmation' => 0,
            'outstandingStatus' => 0,
            'assetPicture' => $foto_nama,
            'departmentDetail' => $request->input('deptDetailInput'),
            'user' => Auth::user()->name,
            'deadline' => $request->input('deadline')

            // 'assetPicture'=>$request->input( 'assetPicture'),
        ];

        CIP::create($data);

        return redirect('cip/user/request');
    }

    public function storeRevisi(Request $request, string $id)
    {
        $data = CIP::where('id', $id)->first();
        if ($request->file('assetPicture')) {
            $foto_file = $request->file('assetPicture');
            $foto_eks = $foto_file->getClientOriginalExtension();
            $foto_nama = date('ymdhis') . "." . $foto_eks;
            $foto_file->move(public_path('foto'), $foto_nama);
        } else {
            if ($data->assetPicture) {
                $foto_nama = $data->assetPicture;
            }
        }

        $dept = MasterCostCentre::where('name', $request->input('costCentreInput'))->first();
        $deptDetail = $dept->deptDetail;

        $updata = [
            'assetCodeEnginery' => $request->input('assetCodeEnginery'),
            'assetCategory' => $request->input('assetCategoryInput'),
            'assetClass' => $request->input('assetClassInput'),
            'assetGroup' => $request->input('assetGroupInput'),
            'assetDescription' => $request->input('assetDescription'),
            'subAsset' => $request->input('subAsset'),
            'picAsset' => $request->input('picAsset'),
            'acquisitionCIP' => $request->input('acquisitionCIP'),
            'depreciationStart' => $request->input('depreciationStart'),
            'depreciationEnd' => $request->input('depreciationEnd'),
            'currentBookValue' => $request->input('currentBookValue'),
            'assetCondition' => $request->input('assetConditionInput'),
            'assetStatus' => $request->input('assetStatusInput'),
            'costCenter' => $request->input('costCentreInput'),
            'product' => $request->input('product'),
            'department' => $request->input('departmentInput'),
            'vendor' => $request->input('vendor'),
            'site' => $request->input('siteInput'),
            'line' => $request->input('line'),
            'proccess' => $request->input('proccess'),
            'quantity' => $request->input('quantity'),
            'uom' => $request->input('uomInput'),
            'acquisitionValue' => $request->input('acquisitionValue'),
            'budgetNumber' => $request->input('budgetNumber'),
            'poNumber' => $request->input('poNumber'),
            'statusRequest' => 'Not Confirm',
            'statusConfirmation' => 0,
            'outstandingStatus' => 0,
            'assetPicture' => $foto_nama,
            'departmentDetail' => $request->input('deptDetailInput'),
            'user' => Auth::user()->name,
            'deadline' => $request->input('deadline'),

        ];

        CIP::where('id', $id)->update($updata);

        return redirect('cip/user/request');
    }



    public function exportExcel()
    {
        $data = CIP::where('statusRequest', 'Not Confirm')
            ->orderBy('id', 'asc')
            ->get(); // Ambil semua data tanpa paginasi

        return Excel::download(new RequestCIP($data), 'CIP.xlsx');
    }

    public function exportConfirmationExcel()
    {
        $data = CIP::where('statusRequest', 'Confirm')
            ->where('statusConfirmation', false)
            ->orderBy('id', 'asc')
            ->get(); // Get all confirmed data without pagination

        return Excel::download(new ConfirmationCIP($data), 'ConfirmationCIP.xlsx');
    }

    public function exportOutstandingExcel()
    {
        $data = CIP::where('statusRequest', 'Confirm')
            ->where('statusConfirmation', true)
            ->where('outstandingStatus', false)
            ->orderBy('id', 'asc')
            ->get(); // Get all confirmed data without pagination

        return Excel::download(new OutstandingCIP($data), 'Outstanding.xlsx');
    }

    public function exportOutstandingUserExcel()
    {
        $data = CIP::where('statusRequest', 'Confirm')
            ->where('statusConfirmation', true)
            ->where('outstandingStatus', false)
            ->orderBy('id', 'asc')
            ->get(); // Get all confirmed data without pagination

        return Excel::download(new OutstandingUserCIP($data), 'OutstandingUser.xlsx');
    }

    public function notifyCip(Request $request, $id)
    {
        $cip = CIP::find($id);
        $name = $request->input('name');
        $user = User::where('name', $name)->first();
        $email = $user->email;
        Mail::to($email)->send(new NotificationEmail($cip));
        return redirect('cip/confirmation');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
