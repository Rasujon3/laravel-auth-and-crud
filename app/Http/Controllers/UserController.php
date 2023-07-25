<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard;

class UserController extends Controller
{
    function OnShow() {
        return view('index');
    }

    function OnInsert(Request $request) {
        $info = new dashboard();
        $info->name = $request->name; // req(input field er value), info(database er name)
        $info->email = $request->email; // req(input field er value), info(database er email)
        $info->pass = $request->pass; // req(input field er value), info(database er pass)
        $info->save();
        return redirect('/login');
    }

    function Login() {
        return view('login');
    }

    function CheckedLogin(Request $request)  {
        // Input value catch
        $email = $request->email;
        $pass = $request->pass;

        // query for match or not
        $count = dashboard::where('email','=',$email)->where('pass','=',$pass)->count();

        if ($count == 1) {
            $request->session()->put('email',$email);
            return redirect('/admin/dashboard');
        } else {
            return "Login failed.";
        }
        
    }

    function OnAdmin() {
        return view('admin');
    }

    function OnLogout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}


