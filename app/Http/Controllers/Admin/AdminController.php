<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('admin.panel',compact('products'));
    }
}
