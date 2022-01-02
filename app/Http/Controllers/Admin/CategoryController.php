<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Category;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index() {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }
    public function create() {
        return view('admin.category.create');
    }
    public function createPost(Request $request) {
        $categories =new Category;
        $categories->title=$request->title;

        $categories->slug=Str::Slug($request->title);



        if($request->hasFile('image')){//resim varsa
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $categories->image='uploads/'.$imageName;
        }

        $categories->save();
        return redirect()->route('category.index');
    }
    public function update($id) {

        $categories=Category::FindOrFail($id);
        return view('admin.category.update',compact('categories'));
    }
    public function updatePost(Request $request,$id) {
        $categories =Category::FindOrFail($id);
        $categories->title=$request->title;

        $categories->slug=Str::Slug($request->title);


        if($request->hasFile('image')){//resim varsa
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $categories->image='uploads/'.$imageName;
        }
        $categories->save();
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        Category::Find($id)->delete();
        return redirect()->route('category.index');
    }
}
