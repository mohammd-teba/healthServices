<?php

namespace App\Http\Controllers\Dashboard;



use App\Http\Requests\Dashboard\Pharmacies\Store;
use App\Http\Requests\Dashboard\Pharmacies\Update;
use App\Models\Medicine;
use App\Models\Pharmacy;

class Pharmacies extends DashboardController
{
    protected function append(){
        $array = [
            'medicines' => Medicine::get(),
            'selectedMedicines' => [] ,
        ];
        if (request()->route()->parameter('pharmacy')){
            $array['selectedMedicines'] = Pharmacy::find(request()->route()->parameter('pharmacy'))
                ->medicines()->get()->pluck('id')->toArray();
        }
        return $array;
    }

    public function index(){
        $pharmacies = Pharmacy::with('medicines')->paginate(10);
        return view('dashboard.pharmacies.index' , compact('pharmacies'));
    }

    public function create(){
        $medicines = Medicine::get();
        $append = $this->append();
        return view('dashboard.pharmacies.create' , compact('medicines'))->with($append);
    }

    public function store(Store $request){

        $file = $request->file('image');
        $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads') , $fileName);

        $requestArray = ['image' => $fileName] + $request->all();
        $pharmacy = Pharmacy::create($requestArray);
        if (isset($requestArray['medicines']) && !empty($requestArray['medicines'])){
            $pharmacy->medicines()->sync($requestArray['medicines']);
        }

        $pharmacy->save();
        return redirect()->route('pharmacies.index');
    }

    public function edit($id){
        $append = $this->append();
        $medicines = Medicine::get();
        $pharmacy = Pharmacy::FindOrFail($id);
        return view('dashboard.pharmacies.edit', compact('pharmacy','medicines'))->with($append);
    }

    public function update($id , Update $request){

        $requestArray = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads') , $fileName);
            $requestArray =['image' => $fileName] + $requestArray;
        }
        $pharmacy = Pharmacy::FindOrFail($id);
        $pharmacy->update($requestArray);
        if (isset($requestArray['medicines']) && !empty($requestArray['medicines'])){
            $pharmacy->medicines()->sync($requestArray['medicines']);
        }
        return redirect()->route('pharmacies.edit' , ['id' => $pharmacy->id]);

    }

    public function destroy($id){
        $pharmacy = Pharmacy::FindOrFail($id)->delete();
        return redirect()->route('pharmacies.index');

    }
}
