<?php

namespace App\Http\Controllers\Dashboard;



use App\Http\Requests\Dashboard\Categories\Store;
use App\Models\Category;
use Illuminate\Http\Request;

class Categories extends DashboardController
{
    public function index(){
        $categories = Category::paginate(10);

        return view('dashboard.categories.index' , compact('categories'));
    }

    public function create(){
        return view('dashboard.categories.create');
    }

    public function store(Store $request){
        $request = $request->all();
        $category = Category::create($request);
        $category->save();
//        alert()->success('New category added' , 'Done');
        return redirect('/admin/categories')->with('success', 'Category has been added');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.categories.edit' , compact('category'));
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
        $category = Category::findOrFail($id);
        $category->name = $request->get('name');
        $category->meta_des = $request->get('meta_des');
        $category->save();
//        alert()->success('The category was updated' , 'Done');
        return redirect()->route('categories.edit' , ['id' => $category->id])->with('success', 'The process done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::FindOrFail($id)->delete();
//        alert()->warning('The category was deleted' , 'Done');
        return redirect()->route('categories.index');
    }

}
