<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewCategory;
use App\Http\Requests\UpdateCategory;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreNewCategory $request)
    {
        $data['name_ar'] = $request->name_ar;
        $data['name_en'] = $request->name_en;
        toastr()->success('تم اضافة القسم بنجاح!');
        Category::create($data);
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('categories.edit', compact('category'));
    }

    public function update(UpdateCategory $request, $id)
    {
        $categories = Category::where('id', '=', $id)->first();
        $data['name_ar']       = $request->name_ar;
        $data['name_en']       = $request->name_en;
        toastr()->success('تم تعديل القسم بنجاح!');
        $categories->update($data);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::where('id', '=',$id)->delete();
        toastr()->success('تم حذف القسم بنجاح!');
        return redirect()->route('categories.index');
    }
}
