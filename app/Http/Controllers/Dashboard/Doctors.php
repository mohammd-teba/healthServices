<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Doctors\Store;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Doctors extends Controller
{

    public function index(){
        $doctors = Doctor::with('user')->paginate(5);
        return view('dashboard.doctors.index' , compact('doctors'));
    }

    public function create(){
        return view('dashboard.doctors.create');
    }

    public function store(Store $request){

        $file = $request->file('image');
        $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads') , $fileName);
        $requestArray = ['user_id' => auth()->user()->id , 'image' => $fileName] + $request->all() ;
        $doctor = Doctor::create($requestArray);
        $doctor->save();
        return redirect()->route('doctors.index');
    }

    public function edit($id){
        $doctor = Doctor::FindOrFail($id);
        return view('dashboard.doctors.edit', compact('doctor'));
    }

    public function update($id , Update $request){

        $requestArray = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads') , $fileName);
            $requestArray =['image' => $fileName] + $requestArray;
        }
        $doctor = Doctor::FindOrFail($id);
        $doctor->update($requestArray);
        return redirect()->route('doctors.edit' , ['id' => $doctor->id]);

    }

    public function destroy($id){
        $doctor = Doctor::FindOrFail($id)->delete();
        return redirect()->route('doctors.index');

    }
}
