<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AltCategory;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index() {
        $products=Product::orderBy('created_at','DESC')->get();

        return view('admin.product.index',compact('products'));
    }
    public function create() {
        $alt_categories=AltCategory::all();
        return view('admin.product.create',compact('alt_categories'));
    }
    public function createPost(Request $request) {


        $products =new Product;
        $products->title=$request->title;
        $products->slug=Str::Slug($request->title);
        $products->description=$request->description;
        $products->alt_category_id=$request->alt_category;
        $products->save();
        $products->category_id=$products->get_altCategory->get_ustCategory->id;

       // $request->request->add(['category_id' => $products->get_altCategory->get_ustCategory->id]);

        //$products->category_id=$request->alt_category->get_ustCategory->id;

        $products->price=$request->price;

        if($request->hasFile('image')){//resim varsa
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $products->image='uploads/'.$imageName;
        }
        $products->save();

        return redirect()->route('product.index');
    }
    public function update($id) {
        $products=Product::FindOrFail($id);
        $alt_categories=AltCategory::all();
        return view('admin.product.update',compact('products','alt_categories'));
    }
    public function updatePost(Request $request,$id) {
        $products =Product::FindOrFail($id);
        $products->title=$request->title;
        $products->slug=Str::Slug($request->title);
        $products->description=$request->description;
        $products->price=$request->price;

        if($request->hasFile('image')){//resim varsa
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $products->image='uploads/'.$imageName;
        }
        $products->save();
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        Product::Find($id)->delete();
        return redirect()->route('product.index');
    }
}
