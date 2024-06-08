<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\CIP;
use App\Models\MasterAssetCategory;
use App\Models\MasterAssetStatus;
use App\Models\MasterCostCentre;
use App\Models\MasterLine;
use App\Models\MasterSite;
use App\Models\MasterUom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class cipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CIP::where('statusRequest', 'Not Confirm')
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/request')->with('data',$data);
    }
    
    public function indexUser()
    {
        $data = CIP::where('statusRequest', 'Not Confirm')
        ->where('user',  Auth::user()->name)
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/user/request')->with('data',$data);
    }

    public function detail(string $id){
        $data = CIP::where('id', $id)->first();
        return view('cip/confirmrequest')->with('data',$data);
    }

    public function storeConfirm( request $request, $id){
        $data = [
            'inventoryNumber'=>$request->inventoryNumber,
            'cipNumber'=>$request->cipNumber,
            'statusRequest' =>$request->statusRequestInput,
        ];
        CIP::where('id', $id)->update($data);

        return redirect('cip/request');
    }

    public function statusConfirm($id){

        Log::info("Status confirmation called for ID: $id");

        $data = [
            'statusConfirmation' => true,
        ];
        CIP::where('id', $id)->update($data);

        return redirect('cip/user/confirmation');
    }
    public function outstandingConfirm( request $request){

        // Log::info("Status confirmation called for ID: $id");
        $ids = $request->input('ids', []);
        $id = $ids[0];
        $count = count($ids);
        $uom = MasterUom::select('name')->distinct()->get();
        
        $sum = 0;
        foreach ($ids as $id) {
            $datas = CIP::where('id', $id)->first();
            $sum = $sum + $datas->currentBookValue;
        }
        
        $data = CIP::where('id', $id)->first();
        $depre = MasterAssetCategory::where('assetGroup', $data->assetGroup)->first();
        
        // $ids = $request->input('ids');
        // $idsArray = explode(',', $ids);
        // $providedCount = count($idsArray);

        for ($i = 1; $i < $count; $i++) {
            $cip1 = CIP::where('id', $ids[$i])->first();
            $cip2 = CIP::where('id', $ids[$i-1])->first();
            // Log::info("Status confirmation called for ID: $cip1");
            if( $cip1->inventoryNumber != $cip2->inventoryNumber ){
            return redirect('/cip/outstanding')->with('message', 'Pastikan inventory number sama');
            }
        }
        

        return view('cip/addasset')
        ->with('data',$data)
        ->with('sum',$sum)
        ->with('ids',$ids)
        ->with('uom',$uom)
        ->with('depre',$depre)
        ->with('count',$count);
    }
    public function cipToAsset(request $request){
        // Log::info("Status confirmation called for ID: $id");

        $dept = MasterCostCentre::where('name', $request->input( 'costCenter'))->first();

        $foto_file = $request->file('assetPicture');
        $foto_eks = $foto_file->getClientOriginalExtension();
        $foto_nama = date('ymdhis').".".$foto_eks;
        $foto_file ->move(public_path('foto'),$foto_nama);

        $ids = $request->input('ids');
        $idsArray = explode(',', $ids);
        $providedCount = count($idsArray);

        for ($i = 1; $i < $providedCount; $i++) {
            $cip1 = CIP::where('id', $idsArray[$i])->first();
            $cip2 = CIP::where('id', $idsArray[$i-1])->first();
            // Log::info("Status confirmation called for ID: $cip1");
            if( $cip1->inventoryNumber != $cip2->inventoryNumber ){
            return redirect('/cip/outstanding')->with('message', 'Pastikan inventory number sama');
            }
        }

        foreach ($idsArray as $id) {
            $upData = [
                'outstandingStatus' => true,
            ];
            return redirect('/cip/outstanding')->with('message', 'Pastikan inventory number sama');
        }

        $data = [
            'assetCodeAccounting'=>$request->input( 'assetCodeAccounting'),
            'assetCodeEnginery' =>$request->input( 'assetCodeEnginery'),
            'assetCategory' =>$request->input( 'assetCategory'),
            'assetClass' =>$request->input( 'assetClass'),
            'assetGroup' =>$request->input( 'assetGroup'),
            'assetDescription' =>$request->input( 'assetDescription'),
            'subAsset' =>$request->input( 'subAsset'),
            'picAsset' =>$request->input( 'picAsset'),
            'cipCode' =>$request->input( 'cipCode'),
            'acquisitionCIP' =>$request->input( 'acquisitionCIP'),
            'depreciationStart' =>$request->input( 'depreciationStart'),
            'depreciationEnd' =>$request->input( 'depreciationEnd'),
            'currentBookValue' =>$request->input( 'currentBookValue'),
            'assetCondition' =>$request->input( 'assetConditionInput'),
            'assetStatus' =>$request->input( 'assetStatus'),
            'costCenter' =>$request->input( 'costCenter'),
            'product' =>$request->input( 'product'),
            'inventoryNumber'=>$request->input( 'inventoryNumber'),
            'department' =>$request->input( 'department'),
            'departmentDetail' =>$dept->deptDetail,
            'vendor' =>$request->input( 'vendor'),
            'site' =>$request->input( 'site'),
            'line' =>$request->input( 'line'),
            'proccess' =>$request->input( 'proccess'),
            'quantity' =>$request->input( 'quantity'),
            'uom' =>$request->input( 'uomInput'),
            'acquisitionValue' =>$request->input( 'acquisitionValue'),
            'cipNumber'=>$request->input( 'cipCode'),
            'budgetNumber' =>$request->input( 'budgetNumber'),
            'poNumber' =>$request->input( 'poNumber'),
            'assetPicture'=>$foto_nama,
            'user'=> Auth::user()->name
        ];
        Asset::create($data);
        
        foreach ($idsArray as $id) {
            $upData = [
                'outstandingStatus' => true,
            ];
            CIP::where('id', $id)->update($upData);
        }

        return redirect('/');
    }
    
    public function indexCon()
    {
        $data = CIP::where('statusRequest', 'Confirm')
        ->where('statusConfirmation', false)
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/confirmation')->with('data',$data);
    }
    public function indexConUser()
    {
        $data = CIP::where('statusRequest', 'Confirm')
        ->where('statusConfirmation', false)
        ->where('user',  Auth::user()->name)
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/user/confirmation')->with('data',$data);
    }
    
    public function indexOut()
    {
        $data = CIP::where('statusConfirmation', true)
        ->where('outstandingStatus', false)
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/outstanding')->with('data',$data);
    }
    public function indexOutUser()
    {
        $data = CIP::where('statusConfirmation', true)
        ->where('outstandingStatus', false)
        ->where('user',  Auth::user()->name)
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/user/outstanding')->with('data',$data);
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
        ->with('category',$category)
        ->with('class',$class)
        ->with('group',$group)
        ->with('status',$status)
        ->with('dept',$dept)
        ->with('costCentre',$costCentre)
        ->with('line',$line)
        ->with('site',$site)
        ->with('uom',$uom);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $foto_file = $request->file('assetPicture');
        $foto_eks = $foto_file->getClientOriginalExtension();
        $foto_nama = date('ymdhis').".".$foto_eks;
        $foto_file ->move(public_path('foto'),$foto_nama);

        $dept = MasterCostCentre::where('name', $request->input( 'costCentreInput'))->first();
        $deptDetail = $dept->deptDetail;
        
        $data = [
            'assetCodeEnginery' =>$request->input( 'assetCodeEnginery'),
            'assetCategory' =>$request->input( 'assetCategoryInput'),
            'assetClass' =>$request->input( 'assetClassInput'),
            'assetGroup' =>$request->input( 'assetGroupInput'),
            'assetDescription' =>$request->input( 'assetDescription'),
            'subAsset' =>$request->input( 'subAsset'),
            'picAsset' =>$request->input( 'picAsset'),
            'acquisitionCIP' =>$request->input( 'acquisitionCIP'),
            'depreciationStart' =>$request->input( 'depreciationStart'),
            'depreciationEnd' =>$request->input( 'depreciationEnd'),
            'currentBookValue' =>$request->input( 'currentBookValue'),
            'assetCondition' =>$request->input( 'assetConditionInput'),
            'assetStatus' =>$request->input( 'assetStatusInput'),
            'costCenter' =>$request->input( 'costCentreInput'),
            'product' =>$request->input( 'product'),
            'department' =>$request->input( 'departmentInput'),
            'vendor' =>$request->input( 'vendor'),
            'site' =>$request->input( 'siteInput'),
            'line' =>$request->input( 'line'),
            'proccess' =>$request->input( 'proccess'),
            'quantity' =>$request->input( 'quantity'),
            'uom' =>$request->input( 'uomInput'),
            'acquisitionValue' =>$request->input( 'acquisitionValue'),
            'budgetNumber' =>$request->input( 'budgetNumber'),
            'poNumber' =>$request->input( 'poNumber'),
            'statusRequest'=>'Not Confirm',
            'statusConfirmation'=> 0,
            'outstandingStatus'=> 0 ,
            'assetPicture'=>$foto_nama,
            'departmentDetail'=>$deptDetail,
            'user'=> Auth::user()->name
            
            // 'assetPicture'=>$request->input( 'assetPicture'),
        ];

        CIP::create($data);

        return redirect('cip/user/request');
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
