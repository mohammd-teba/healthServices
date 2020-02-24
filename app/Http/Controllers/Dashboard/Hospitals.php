<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Requests\Dashboard\Hospitals\Store;
use App\Http\Requests\Dashboard\Hospitals\Update;
use App\Models\Category;
use App\Models\Hospital;

class Hospitals extends DashboardController
{
    protected function append(){
                $array = [
            'categories' => Category::get(),
            'selectedCategories' => [] ,
        ];
        if (request()->route()->parameter('hospital')){
          $array['selectedCategories'] = Hospital::find(request()->route()->parameter('hospital'))
              ->categories()->get()->pluck('id')->toArray();
        }
        return $array;
    }

    public function index(){
        $hospitals = Hospital::with('categories')->paginate(10);
        return view('dashboard.hospitals.index' , compact('hospitals'));
    }

    public function create(){
        $categories = Category::get();
        $append = $this->append();
        return view('dashboard.hospitals.create' , compact('categories'))->with($append);
    }

    public function store(Store $request){

        $file = $request->file('image');
        $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads') , $fileName);

        $requestArray = ['image' => $fileName] + $request->all();
        $hospital = Hospital::create($requestArray);
        if (isset($requestArray['categories']) && !empty($requestArray['categories'])){
            $hospital->categories()->sync($requestArray['categories']);
        }

//        $request =  ['image' => $fileName] + $request->all();
//        $hospital = Hospital::create($request);
        $hospital->save();
        return redirect()->route('hospitals.index');
    }

    public function edit($id){
        $append = $this->append();
        $categories = Category::get();
        $hospital = Hospital::FindOrFail($id);
        return view('dashboard.hospitals.edit', compact('hospital','categories'))->with($append);
    }

    public function update($id , Update $request){

        $requestArray = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().str_random('10').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads') , $fileName);
            $requestArray =['image' => $fileName] + $requestArray;
        }
        $hospital = Hospital::FindOrFail($id);
        $hospital->update($requestArray);
        if (isset($requestArray['categories']) && !empty($requestArray['categories'])){
            $hospital->categories()->sync($requestArray['categories']);
        }
        return redirect()->route('hospitals.edit' , ['id' => $hospital->id]);

    }

    public function destroy($id){
        $hospital = Hospital::FindOrFail($id)->delete();
        return redirect()->route('hospitals.index');

    }
}
