<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\CIP;
use Illuminate\Http\Request;
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

    public function statusConfirm( request $request, $id){

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
        
        $sum = 0;
        foreach ($ids as $id) {
            $datas = CIP::where('id', $id)->first();
            $sum = $sum + $datas->currentBookValue;
        }
        
        $data = CIP::where('id', $id)->first();
        

        return view('cip/addasset')->with('data',$data)->with('sum',$sum)->with('ids',$ids);
    }
    public function cipToAsset(request $request){
        // Log::info("Status confirmation called for ID: $id");
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
            // 'assetPicture'=>$request->input( 'assetPicture'),
        ];
        Asset::create($data);
        $ids = $request->input('ids');
        $idsArray = explode(',', $ids);
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
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('cip/outstanding')->with('data',$data);
    }
    

    public function create()
    {
        return view('cip/user/addrequest');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            'costCenter' =>$request->input( 'costCenter'),
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
