<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {

            Category::create($request->all());
            return redirect()->route('category.index')->with('success','Thêm mới thành công');

        } catch (\Throwable $th) {

            return redirect()->back()->with('error','Thêm mới thất bại');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {

            $category->update($request->all());
            return redirect()->route('category.index')->with('success','Cập nhật thành công');

        } catch (\Throwable $th) {

            return redirect()->back()->with('error','Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {

            $category->delete();
            return redirect()->route('category.index')->with('success','Xóa thành công');

        } catch (\Throwable $th) {

            return redirect()->back()->with('error','Xóa thất bại');
        }
    }

    public function trash(){
        $categories = Category::onlyTrashed()->get();
        return view('admin.category.trash', compact('categories'));
    }

    public function restore($id) {
        Category::withTrashed()->where('id',$id)->restore();
        return redirect()->route('category.index')->with('success','Khôi phục thành công');
    }

    public function forceDelete($id) {
        Category::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('category.trash')->with('success','Xóa thành công');
    }
}
