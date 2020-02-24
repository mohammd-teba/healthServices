<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Medicines\Store;
use App\Models\Medicine;
use Illuminate\Http\Request;


class Medicines extends DashboardController
{
    public function index(){
        $medicines = Medicine::paginate(10);

        return view('dashboard.medicines.index' , compact('medicines'));
    }

    public function create(){
        return view('dashboard.medicines.create');
    }

    public function store(Store $request){
        $request = $request->all();
        $medicine = Medicine::create($request);
        $medicine->save();
//        alert()->success('New category added' , 'Done');
        return redirect('/admin/medicines')->with('success', 'medicine has been added');
    }

    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('dashboard.medicines.edit' , compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->name = $request->get('name');
        $medicine->cost = $request->get('cost');
        $medicine->save();
//        alert()->success('The category was updated' , 'Done');
        return redirect()->route('medicines.edit' , ['id' => $medicine->id])->with('success', 'The process done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::FindOrFail($id)->delete();
//        alert()->warning('The category was deleted' , 'Done');
        return redirect()->route('medicines.index');
    }
}
