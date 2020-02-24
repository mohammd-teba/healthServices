<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Users\Store;
use App\Http\Requests\Dashboard\Users\Update;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class Users extends DashboardController
{


    public function index(){
        $users = User::paginate(10);
        return view('dashboard.users.index' , compact('users'));
    }

    public function create(){
        return view('dashboard.users.create');
    }

    public function store(Store $request){
        $requestArray = $request->all();
        $requestArray['password'] = Hash::make( $requestArray['password']);
        User::create($requestArray);

        return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::FindOrFail($id);
        return view('dashboard.users.edit' , compact('user'));
    }

    public function update($id , Update $request){
        $user = User::FindOrFail($id);

        $requestArray = $request->all();
        if (isset($requestArray['password']) &&  $requestArray['password'] != ""){
            $requestArray['password'] = Hash::make( $requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        $user->update($requestArray);
        return redirect()->route('users.edit' , ['id' => $user->id]);

    }

    public function destroy($id){
        $user = User::FindOrFail($id)->delete();
        return redirect()->route('users.index');

    }
}
