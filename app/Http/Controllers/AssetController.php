<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Asset::orderBy('id', 'asc')->paginate(6);
        return view('listasset')->with('data',$data);
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
            'cipCode' =>$request->input( 'cipCode'),
            'acquisitionCIP' =>$request->input( 'acquisitionCIP'),
            'depreciationStart' =>$request->input( 'depreciationStart'),
            'depreciationEnd' =>$request->input( 'depreciationEnd'),
            'currentBookValue' =>$request->input( 'currentBookValue'),
            'assetCondition' =>$request->input( 'assetConditionInput'),
            'assetStatus' =>$request->input( 'assetStatusInput'),
            'costCenter' =>$request->input( 'costCentreInput'),
            'product' =>$request->input( 'product'),
            'inventoryNumber'=>$request->input( 'inventoryNumber'),
            'department' =>$request->input( 'departmentInput'),
            'vendor' =>$request->input( 'vendor'),
            'site' =>$request->input( 'siteInput'),
            'line' =>$request->input( 'line'),
            'proccess' =>$request->input( 'proccess'),
            'quantity' =>$request->input( 'quantity'),
            'uom' =>$request->input( 'uomInput'),
            'acquisitionValue' =>$request->input( 'acquisitionValue'),
            'cipNumber'=>$request->input( 'cipCode'),
            'budgetNumber' =>$request->input( 'budgetNumber'),
            'poNumber' =>$request->input( 'poNumber'),
            'assetPicture'=>$foto_nama,
            'departmentDetail'=> $dept->deptDetail,
            'user'=> Auth::user()->name
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

    public function indexOpname()
    {
        $data = Asset::orderBy('assetCodeEnginery', 'asc')->paginate(6);
        return view('assetopname')->with('data',$data);
    }
}
