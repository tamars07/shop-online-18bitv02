<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class AdminController extends Controller
{
    //
    public function getIndex(){
    	return view('admin.index');
    }
    public function getProducts(){
    	$products = Product::all();
    	return view('admin.products',array(
    		'products' => $products
    	));
    }
}
