<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Http\Requests\loginrequest;

class AdminController extends Controller
{

    public function getlogin()
    {
     return view('admin.admin_login');
    }

    public function postlogin(loginrequest $request)
    {

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"),
         'password' => $request->input("password")])) {
             return redirect()->route('admin.dashboard');
         }
         return redirect()->back()->with(['error'=>'المعلومات خاطئة']);
    }

    public function index(){
        return view ('admin.admin_dashboard');
    }
    public function logout()
    {

        $gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('admin.login');
    }

    private function getGaurd()
    {
        return auth('admin');
    }



}
