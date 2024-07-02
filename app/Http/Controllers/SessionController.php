<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\CIP;
use App\Models\MasterCostCentre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //

    function index(){
        return view('login');
    }

    function dashboard(){
        $asset = Asset::where('cipStatus', false)->count();
        $cip1 = Asset::where('cipStatus', true)->count();
        $cip2 = CIP::where('statusConfirmation', true)
        ->where('statusRequest', 'Confirm')
        ->where('outstandingStatus', false)
        ->count();
        $cip = $cip1 + $cip2;


        $assets = Asset::all();

        $value = $assets->sum(function ($asset) {
            return (int) $asset->acquisitionValue;
        });
        $count = $this->formatRupiah($value);

        return view('dashboard')->with('asset',$asset)->with('cip',$cip)->with('count',$count);
    }

    function formatRupiah($value) {
        // Ubah nilai menjadi format mata uang Rupiah
        $formattedValue = 'Rp. ' . number_format($value, 0, ',', '.');
    
        // Jika ada tiga digit nol di belakang, ganti menjadi "ribu"
        if (substr($formattedValue, -3) === '.00') {
            $formattedValue = rtrim($formattedValue, '0') . ' ribu';
        }
    
        // Jika ada enam digit nol di belakang, ganti menjadi "juta"
        if (substr($formattedValue, -6) === '.000.00') {
            $formattedValue = rtrim($formattedValue, '0') . ' juta';
        }
    
        // Jika ada sembilan digit nol di belakang, ganti menjadi "miliar"
        if (substr($formattedValue, -9) === '.000.000.00') {
            $formattedValue = rtrim($formattedValue, '0') . ' miliar';
        }
    
        return $formattedValue;
    }
    

    function login(Request $request){
        Session::flash('email', $request-> email);
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $infoLogin= [
            'email' => $request ->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infoLogin)){
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    function setting(){
        $dept = MasterCostCentre::all()->unique('dept');
        return view('setting')->with('dept',$dept);

    }

    function register(Request $request){
        $data = [
            'name' => $request->input('name'),
            'password' =>Hash::make( $request->password),
            'email' => $request->input('email'),
            'dept' => $request->input('deptInput'),
            'role' => $request->input('role') ?? 'user',
        ];

        User::create($data);
        return redirect('/setting');
    }
}
