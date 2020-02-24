<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\User;

class Home extends DashboardController
{

    public function index(){
        $users = User::all();
        return view ('dashboard.home' , compact('users'));
//        return view ('dashboard.home')->with('users' , $users);
    }
}
