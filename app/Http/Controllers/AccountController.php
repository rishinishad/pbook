<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function account()
    {
        // return view('account');
        $users = User::all();
        return view('account',[
            'users'=>$users
        ]);
    }
    
}