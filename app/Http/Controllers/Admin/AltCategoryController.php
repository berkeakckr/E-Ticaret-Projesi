<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\AltCategory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AltCategoryController extends Controller
{
    public function index() {
        $alt_categories=AltCategory::all();
        return view('admin.alt_category.index',compact('alt_categories'));
    }
    public function create() {
        $categories=Category::all();
        return view('admin.alt_category.create',compact('categories'));
    }
    public function createPost(Request $request) {
        $alt_categories =new AltCategory;
        $alt_categories->title=$request->title;
        $alt_categories->ust_id=$request->category;
        $alt_categories->slug=Str::Slug($request->title);



        if($request->hasFile('image')){//resim varsa
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $alt_categories->image='uploads/'.$imageName;
        }

        $alt_categories->save();
        return redirect()->route('alt.category.index');
    }
    public function update($id) {

        $alt_categories=AltCategory::FindOrFail($id);
        $categories=Category::all();
        return view('admin.alt_category.update',compact('alt_categories','categories'));
    }
    public function updatePost(Request $request,$id) {
        $alt_categories =AltCategory::FindOrFail($id);
        $alt_categories->title=$request->title;
        $alt_categories->ust_id=$request->category;
        $alt_categories->slug=Str::Slug($request->title);


        if($request->hasFile('image')){//resim varsa
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $alt_categories->image='uploads/'.$imageName;
        }
        $alt_categories->save();
        return redirect()->route('alt.category.index');
    }

    public function delete($id)
    {
       AltCategory::Find($id)->delete();
        return redirect()->route('alt.category.index');
    }
}
