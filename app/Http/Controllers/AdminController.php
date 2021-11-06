<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.category');
    }
    public function createPost(Request $request)
    {
        $category = new Kategori();
        $category->kategori_adi=$request->category;
        $category->slug=$request->category;
        $category->save();
        return redirect()->back();
    }
}
