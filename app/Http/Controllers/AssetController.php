<?php

namespace App\Http\Controllers;

use App\Exports\AssetReport;
use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\MasterAssetCategory;
use App\Models\MasterAssetStatus;
use App\Models\MasterCostCentre;
use App\Models\MasterLine;
use App\Models\MasterSite;
use App\Models\MasterUom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ListAsset;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         // Get the filter value from the request
        $filter = $request->input('assetClass');

        // Query the data, applying the filter if provided
        $query = Asset::orderBy('id', 'asc')->where('cipStatus', false);

        if ($filter) {
            $query->where('assetClass', $filter);
        }

        $data = $query->paginate(6);

        // Pass the current filter value to the view
        return view('listasset')->with('data', $data)->with('filter', $filter);
    }

    /**
     * Show the form for creating a new resource.
     */
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
        return view('listasset/addasset')
        ->with('category',$category)
        ->with('class',$class)
        ->with('group',$group)
        ->with('status',$status)
        ->with('dept',$dept)
        ->with('costCentre',$costCentre)
        ->with('line',$line)
        ->with('site',$site)
        ->with('uom',$uom);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'assetCodeAccounting'=>'required',
        //     'assetCodeEnginery' =>'required',
        //     'assetCategory' =>'required',
        //     'assetClass' =>'required|numeric',
        //     'assetGroup' =>'required',
        //     'assetDescription' =>'required',
        //     'subAsset' =>'required',
        //     'picAsset' =>'required',
        //     'cipCode' =>'required',
        //     'acquisitionCIP' =>'required',
        //     'depreciationStart' =>'required',
        //     'depreciationEnd' =>'required',
        //     'currentBookValue' =>'required',
        //     'assetCondition' =>'required',
        //     'assetStatus' =>'required',
        //     'costCenter' =>'required',
        //     'product' =>'required',
        //     'inventoryNumber'=>'required',
        //     'department' =>'required',
        //     'vendor' =>'required',
        //     'site' =>'required',
        //     'line' =>'required',
        //     'proccess' =>'required',
        //     'quantity' =>'required|numeric',
        //     'uom' =>'required',
        //     'acquisitionValue' =>'required',
        //     'budgetNumber' =>'required',
        //     'poNumber' =>'required',
        //     // 'assetPicture'=>'required',
        // ]);

        $foto_file = $request->file('assetPicture');
        $foto_eks = $foto_file->getClientOriginalExtension();
        $foto_nama = date('ymdhis').".".$foto_eks;
        $foto_file ->move(public_path('foto'),$foto_nama);

        $dept = MasterCostCentre::where('name', $request->input( 'costCentreInput'))->first();


        $data = [
            'assetCodeAccounting'=>$request->input( 'assetCodeAccounting'),
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
            'departmentDetail' =>$request->input( 'deptDetailInput'),
            'vendor' =>$request->input( 'vendor'),
            'site' =>$request->input( 'siteInput'),
            'line' =>$request->input( 'line'),
            'proccess' =>$request->input( 'proccess'),
            'quantity' =>$request->input( 'quantity'),
            'quantityInput' =>$request->input( 'quantity'),
            'uom' =>$request->input( 'uomInput'),
            'acquisitionValue' =>$request->input( 'acquisitionValue'),
            'cipNumber'=>$request->input( 'cipNumber'),
            'budgetNumber' =>$request->input( 'budgetNumber'),
            'poNumber' =>$request->input( 'poNumber'),
            'assetPicture'=>$foto_nama,
            'user'=> Auth::user()->name,
            'cipStatus'=> false,
            'cipId'=> '-'
        ];



        Asset::create($data);

        return redirect('listasset');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Asset::where('id', $id)->first();
        return view('listasset/assetdetail')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        $data = Asset::where('id', $id)->first();
        $depreciation = MasterAssetCategory::where('assetGroup', $data->assetGroup)->first();

        return view('listasset/assetedit')->with('data',$data)
        ->with('data',$data)
        ->with('category',$category)
        ->with('class',$class)
        ->with('group',$group)
        ->with('status',$status)
        ->with('dept',$dept)
        ->with('costCentre',$costCentre)
        ->with('line',$line)
        ->with('site',$site)
        ->with('uom',$uom)
        ->with('depreciation',$depreciation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Asset::where('id',$id)->first();
        if ($request->file('assetPicture')){
            $foto_file = $request->file('assetPicture');
            $foto_eks = $foto_file->getClientOriginalExtension();
            $foto_nama = date('ymdhis').".".$foto_eks;
            $foto_file ->move(public_path('foto'),$foto_nama);
        } else {
            if($data->assetPicture){
                $foto_nama = $data->assetPicture;
            }
        }
        
        if( $request->input('assetStatusInput') != $data->assetStatus){
            $disposal = [
                'disposalDate' => Carbon::now(),
            ];
            Asset::where('id', $id)->update($disposal);
        } 
        
        $updata = [
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
            'quantityInput' =>$request->input( 'quantity'),
            'uom' =>$request->input( 'uomInput'),
            'acquisitionValue' =>$request->input( 'acquisitionValue'),
            'budgetNumber' =>$request->input( 'budgetNumber'),
            'poNumber' =>$request->input( 'poNumber'),
            'assetPicture'=>$foto_nama,
            'departmentDetail'=>$request->input( 'deptDetailInput'),  
        ];

        Asset::where('id', $id)->update($updata);

        return redirect('listasset/assetdetail/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function indexLayout()
    {
        $data = Asset::all();
        $uniqueData = $data->unique('line');
        return view('assetlayout', ['data' => $uniqueData]);
    }
    public function detailLayout(string $line)
    {
        $data = Asset::where('line', $line)->orderBy('id', 'asc')->paginate(6);
        return view('assetlayout/lineproductionmap')->with('data',$data);
    }

    public function indexOpname(Request $request)
    {
        $query = Asset::orderBy('assetCodeEnginery', 'asc');
        $filter = $request->input('department');

        if ($filter) {
            $query->where('assetClass', $filter);
        }

        $data = $query->paginate(6);

        // Pass the current filter value to the view
        return view('assetopname')->with('data', $data)->with('filter', $filter);

    }
    public function detailOpname(string $id)
    {
        $data = Asset::where('id', $id)->first();
        $status = MasterAssetStatus::select('status')->distinct()->get();
        return view('assetopnameedit')->with('data',$data)->with('status', $status);
    }
    public function storeOpname(Request $request, string $id)
    {
        $data = Asset::where('id',$id)->first();
        if ($request->file('assetPicture')){
            $foto_file = $request->file('assetPicture');
            $foto_eks = $foto_file->getClientOriginalExtension();
            $foto_nama = date('ymdhis').".".$foto_eks;
            $foto_file ->move(public_path('foto'),$foto_nama);
        } else {
            if($data->assetPicture){
                $foto_nama = $data->assetPicture;
            }
        }
        if( $request->input('assetStatusInput') == $data->assetStatus){
            $updata = [
                'quantityInput' =>$request->input( 'quantityInput'),
                'assetCondition' => $request->input('assetConditionInput'),
                'assetPicture' => $foto_nama
            ];
        } else {
            $updata = [
                'quantityInput' =>$request->input( 'quantityInput'),
                'assetCondition' => $request->input('assetConditionInput'),
                'assetstatus' => $request->input('assetStatusInput'),
                'disposalDate' => Carbon::now(),
                'assetPicture' => $foto_nama
            ];
        }
        Asset::where('id', $id)->update($updata);
        return redirect('assetopname');
    }
    public function indexReport()
    {
        $assets = Asset::all();
        $earliestYear = $assets->min(function ($asset) {
            return Carbon::parse($asset->depreciationStart)->year;
        });
        
        $latestYear = $assets->max(function ($asset) {
            return Carbon::parse($asset->depreciationEnd)->year;
        });

        return view('report/depreciation', compact('assets', 'earliestYear', 'latestYear'));
    }
    public function detailReportCommercial(Request $request)
    {

        $monthName = $request->input( 'monthInput');
        $year = $request->input( 'yearInput');

        $monthMapping = [
            'All' => 0,
            'January' => 1,
            'February' => 2,
            'March' => 3,
            'April' => 4,
            'May' => 5,
            'June' => 6,
            'July' => 7,
            'August' => 8,
            'September' => 9,
            'October' => 10,
            'November' => 11,
            'December' => 12,
        ];
    
        // Convert the month name to a month number
        if (array_key_exists($monthName, $monthMapping)) {
            $month = $monthMapping[$monthName];
        } else {
            // Handle invalid month input
            return redirect()->back()->with('error', 'Invalid month input.');
        }


        $date = Carbon::createFromDate($year, $month, 1);

        $assets = Asset::where('depreciationStart', '<=', $date)
                   ->where('depreciationEnd', '>=', $date)
                   ->get();


        // $assets = Asset::semua data yang $month $year masih berada diantara 'depreciationStart' dan "depreciationEnd" asset tersebut
        
        

        return view('report/depreciation/commercial')->with('data',$assets);
    }
    public function detailReportFiscal(Request $request)
    {
        return view('report/depreciation/fiscal');
    }

    public function exportListAssetExcel() {
        $data = Asset::orderBy('id', 'asc')
            ->get(); // Get all confirmed data without pagination

        return Excel::download(new ListAsset($data), 'ListAsset.xlsx');
    }

    public function exportAssetReprotExcel() {
        $data = Asset::orderBy('id', 'asc')
            ->get(); // Get all confirmed data without pagination

        return Excel::download(new AssetReport($data), 'AssetReport.xlsx');
    }
    public function assetReport(Request $request)
    {
        $monthName = $request->input( 'monthInput');
        $year = $request->input( 'yearInput');

        $monthMapping = [
            'All' => 0,
            'January' => 1,
            'February' => 2,
            'March' => 3,
            'April' => 4,
            'May' => 5,
            'June' => 6,
            'July' => 7,
            'August' => 8,
            'September' => 9,
            'October' => 10,
            'November' => 11,
            'December' => 12,
        ];
    
        // Convert the month name to a month number
        if (array_key_exists($monthName, $monthMapping)) {
            $month = $monthMapping[$monthName];
        } else {
            // Handle invalid month input
            return redirect()->back()->with('error', 'Invalid month input.');
        }


        $date = Carbon::createFromDate($year, $month, 1);

        if ($request->input('typeInput')=='Asset'){
            $assets = Asset::whereYear('acquisitionCip', $date->year)
                        ->whereMonth('acquisitionCip', $date->month)
                        ->paginate(6);
            return view('report/assetreport')->with('data',$assets);
        } else {
            $assets = Asset::whereYear('disposalDate', $date->year)
                        ->whereMonth('disposalDate', $date->month)
                        ->paginate(6);
            return view('report/assetreport')->with('data',$assets);
        }

    }
    public function indexAssetReport()
    {
        $assets = Asset::all();
        $earliestYear = $assets->min(function ($asset) {
            return Carbon::parse($asset->acquistionCip)->year;
        });
        
        $latestYear = $assets->max(function ($asset) {
            return Carbon::parse($asset->acquistionCip)->year;
        });
        return view('report/index', compact('assets', 'earliestYear', 'latestYear'));
    }
}
