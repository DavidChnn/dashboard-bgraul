<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\cipController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Mail\test;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['notLogin'])->group(function () {
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'login']);
});

Route::middleware(['isLogin'])->group(function () {

    Route::get('/assetlayout', [AssetController::class, 'indexLayout']);
    Route::get('/assetlayout/lineproductionmap/{line}', [AssetController::class, 'detailLayout']);
    Route::put('/assetlayout/lineproductionmap/{line}', [AssetController::class, 'uploadImagesLayout']);
    Route::get('/assetopname', [AssetController::class, 'indexOpname']);
    Route::get('/assetopnameedit/{id}', [AssetController::class, 'detailOpname']);
    Route::put('/assetopnameedit/{id}', [AssetController::class, 'storeOpname']);

    Route::get('/logout', [SessionController::class, 'logout']);

    Route::middleware(['UserAkses:admin'])->group(function () {

        Route::get('/', [SessionController::class, 'dashboard']);
        Route::get('/setting', [SessionController::class, 'setting']);
        Route::post('/register ', [SessionController::class, 'register']);

        Route::get('listasset', [AssetController::class, 'index']);
        Route::get('/listasset/assetdetail/{id}', [AssetController::class, 'show']);
        Route::get('/listasset/assetedit/{id}', [AssetController::class, 'edit']);
        Route::put('/listasset/assetedit/{id}', [AssetController::class, 'update']);
        Route::get('/listasset/addasset', [AssetController::class, 'create']);
        Route::post('/listasset', [AssetController::class, 'store']);


        Route::get('/cip/request', [cipController::class, 'index']);
        Route::get('/cip/confirmation', [cipController::class, 'indexCon']);
        Route::get('/cip/confirmrequest/{id}', [cipController::class, 'detail']);
        Route::put('/cip/confirmrequest/{id}', [cipController::class, 'storeConfirm']);
        Route::get('/cip/outstanding', [cipController::class, 'indexOut']);
        Route::get('/cip/outstanding/{id}', [cipController::class, 'outstandingConfirm']);
        Route::put('/cip/addasset/{id}', [cipController::class, 'cipToAsset']);

        Route::post('/cip/notify/{id}', [cipController::class, 'notifyUser'])->name('cip.notify');
        Route::post('/cip/email/{id}', [cipController::class, 'notifyCip']);

        Route::get('/exportlistasset', [AssetController::class, 'exportListAssetExcel'])->name('exportlistasset');
        Route::get('/cip/export/exportrequestcip', [cipController::class, 'exportExcel'])->name('cip.export.exportrequestcip');
        Route::get('/cip/export/exportconfirmationcip', [cipController::class, 'exportConfirmationExcel'])->name('cip.export.exportconfirmationcip');
        Route::get('/cip/export/outstandingcip', [cipController::class, 'exportOutstandingExcel'])->name('cip.export.outstandingcip');
        Route::get('/report/export/assetreport', [AssetController::class, 'exportAssetReprotExcel'])->name('report.export.assetreport');


        Route::get('/report/depreciation', [AssetController::class, 'indexReport']);
        Route::post('/report/depreciation/commercial', [AssetController::class, 'detailReportCommercial']);
        Route::post('/report/depreciation/fiscal', [AssetController::class, 'detailReportFiscal']);
        Route::post('/report/assetreport', [AssetController::class, 'assetReport']);
        Route::get('/report/asset', [AssetController::class, 'indexAssetReport']);


        Route::get('masterdata/pic', [UserController::class, 'index'])->name('masterdata.pic');
        Route::get('masterdata/pic/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('masterdata/pic/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('masterdata/pic/{id}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('masterdata/pic/create', [UserController::class, 'create'])->name('users.create');
        Route::post('masterdata/pic', [UserController::class, 'store'])->name('users.store');



        Route::get('/welcome', function () {
            return view('welcome');
        });
    });

    Route::middleware(['UserAkses:user'])->group(function () {

        Route::get('/dashboarduser', function () {
            return view('dashboarduser');
        });
        Route::get('/listassetuser', function () {
            return view('listasetuser');
        });

        Route::get('/cip/user/request', [cipController::class, 'indexUser']);
        Route::post('/cip/user/request', [cipController::class, 'store']);
        Route::get('/cip/user/addrequest', [cipController::class, 'create']);
        Route::get('/cip/user/requestrevisi/{id}', [cipController::class, 'requestRevisi']);
        Route::put('/cip/user/requestrevisi/{id}', [cipController::class, 'storeRevisi']);
        Route::get('/cip/user/confirmation', [cipController::class, 'indexConUser']);
        Route::put('/cip/user/confirmation/{id}', [cipController::class, 'statusConfirm']);
        Route::get('/cip/user/outstanding', [cipController::class, 'indexOutUser']);
        Route::put('/cip/user/outstanding', [cipController::class, 'outstandingConfirmUser']);
        Route::put('/cip/user/merge', [cipController::class, 'mergeCip']);
        // Route::get('/cip/user/ongoing',[cipController::class, 'indexOnUser']);
        // Route::get('/cip/user/ongoing/{inventoryNumber}',[cipController::class, 'ongoingDetail']);
        // Route::put('/cip/user/ongoing/{inventoryNumber}',[cipController::class, 'ongoingStore']);


        Route::get('/cip/user/export/outstanding', [cipController::class, 'exportOutstandingUserExcel'])->name('cip.user.export.outstanding');
    });
});
