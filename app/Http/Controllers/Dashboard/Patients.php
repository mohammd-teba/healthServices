<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Patients\Store;
use App\Http\Requests\Dashboard\Patients\Update;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Patients extends Controller
{
    public function index(){
        $patients = Patient::with('user')->paginate(5);
        return view('dashboard.patients.index' , compact('patients'));
    }

    public function create(){
        return view('dashboard.patients.create');
    }

    public function store(Store $request){

        $file = $request->file('image');
        $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads') , $fileName);
        $requestArray = ['user_id' => auth()->user()->id , 'image' => $fileName] + $request->all() ;
        $patient = Patient::create($requestArray);
        $patient->save();
        return redirect()->route('patients.index');
    }

    public function edit($id){
        $patient = Patient::FindOrFail($id);
        return view('dashboard.patients.edit', compact('patient'));
    }

    public function update($id , Update $request){

        $requestArray = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads') , $fileName);
            $requestArray =['image' => $fileName] + $requestArray;
        }
        $patient = Patient::FindOrFail($id);
        $patient->update($requestArray);
        return redirect()->route('patients.edit' , ['id' => $patient->id]);

    }

    public function destroy($id){
        $patient = Patient::FindOrFail($id)->delete();
        return redirect()->route('patients.index');

    }
}
