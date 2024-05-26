<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\cipController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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
//LOGIN


Route::middleware(['notLogin'])->group(function(){
    Route::get('/login',[SessionController::class, 'index']);
    Route::post('/login',[SessionController::class, 'login']);

});

Route::middleware(['isLogin'])->group(function(){
    
    Route::get('/logout',[SessionController::class, 'logout']);

    Route::middleware(['UserAkses:admin'])->group(function(){

        Route::get('/',[SessionController::class, 'dashboard']);
        Route::get('/setting',[SessionController::class, 'setting']);
        Route::post('/register ',[SessionController::class, 'register']);
        
        Route::get('listasset',[AssetController::class, 'index']);
        Route::get('/listasset/assetdetail/{id}',[AssetController::class, 'show']);
        Route::get('/listasset/editasset',[AssetController::class, 'create']);
        Route::get('/listasset/addasset',[AssetController::class, 'create']);
        Route::post('/listasset',[AssetController::class, 'store']);
        Route::get('/assetlayout',[AssetController::class, 'indexLayout']);
        Route::get('/assetlayout/lineproductionmap/{line}',[AssetController::class, 'detailLayout']);
        Route::get('/assetopname',[AssetController::class, 'indexOpname']);
        
        Route::get('/cip/request',[cipController::class, 'index']);
        Route::get('/cip/confirmation',[cipController::class, 'indexCon']);
        Route::get('/cip/outstanding',[cipController::class, 'indexOut']);
        Route::get('/cip/confirmrequest/{id}',[cipController::class, 'detail']);
        Route::put('/cip/confirmrequest/{id}',[cipController::class, 'storeConfirm']);
        
        Route::get('/welcome', function () {
            return view('welcome');
        });
        
        Route::get('/report/depreciation', function () {
            return view('report/depreciation');
        });
        Route::get('/report/depreciation/fiscal', function () {
            return view('report/depreciation/fiscal');
        });
    });

    Route::middleware(['UserAkses:user'])->group(function(){
         
        Route::get('/dashboarduser', function () {
            return view('dashboarduser');
        });
        Route::get('/listassetuser', function () {
            return view('listasetuser');
        });

        Route::get('/cip/user/request',[cipController::class, 'indexUser']);
        Route::post('/cip/user/request',[cipController::class, 'store']);
        Route::get('/cip/user/addrequest',[cipController::class, 'create']);
        Route::get('/cip/user/confirmation',[cipController::class, 'indexConUser']);
        Route::get('/cip/user/outstanding',[cipController::class, 'IndexOutUser']);

    });

});

// Route::get('/login', function () {
//     return view('login');
// });

// ADMIN
// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/setting',[SessionController::class, 'setting']);
// Route::post('/register ',[SessionController::class, 'register']);

// Route::get('listasset',[AssetController::class, 'index']);
// Route::get('/listasset/assetdetail/{id}',[AssetController::class, 'show']);
// Route::get('/listasset/addasset',[AssetController::class, 'create']);
// Route::post('/listasset',[AssetController::class, 'store']);
// Route::get('/assetlayout',[AssetController::class, 'indexLayout']);
// Route::get('/assetlayout/lineproductionmap/{line}',[AssetController::class, 'detailLayout']);
// Route::get('/assetopname',[AssetController::class, 'indexOpname']);

// Route::get('/cip/request',[cipController::class, 'index']);
// Route::get('/cip/confirmation',[cipController::class, 'indexCon']);
// Route::get('/cip/outstanding',[cipController::class, 'indexOut']);
// Route::get('/cip/confirmrequest/{id}',[cipController::class, 'detail']);
// Route::put('/cip/confirmrequest/{id}',[cipController::class, 'storeConfirm']);

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/report/depreciation', function () {
//     return view('report/depreciation');
// });
// Route::get('/report/depreciation/fiscal', function () {
//     return view('report/depreciation/fiscal');
// });

// Route::get('/cip/request', function () {
//     return view('cip/request');
// });

// Route::get('/cip/confirmrequest', function () {
//     return view('cip/confirmrequest');
// });
// Route::get('/cip/confirmation', function () {
//     return view('cip/confirmation');
// });
// Route::get('/cip/outstanding', function () {
//     return view('cip/outstanding');
// });
// Route::get('/assetlayout', function () {
//     return view('assetlayout');
// });
// Route::get('/assetlayout/lineproductionmap', function () {
//     return view('assetlayout/lineproductionmap');
// });
// Route::get('/assetopname', function () {
//     return view('assetopname');
// });

// Route::get('/setting', function () {
//     return view('setting');
// });



// USER
// Route::get('/dashboarduser', function () {
//     return view('dashboarduser');
// });
// Route::get('/cip/user/request', function () {
//     return view('cip/user/request');
// });
// Route::get('/cip/user/addrequest', function () {
//     return view('cip/user/addrequest');
// });
// Route::get('/cip/user/confirmation', function () {
//     return view('cip/user/confirmation');
// });