<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        $role=Auth::user()->role;
        if($role == '1'){
            return redirect()->route('recipes.index');
        }
        else{
            return view('user.home');
        }
    }
}
