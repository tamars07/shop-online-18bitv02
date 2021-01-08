<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
class AdminController extends Controller
{
    //
    public function index(){
    	return view ('admin.index');
    }
    public function getProducts(){
    	$products = Product::all();

    	return view('admin.products',array(
    		'products'=>$products
    	));
    }
    public function addProduct(){
    	return view('admin.products.add');
    }
    public function postAddProduct(Request $request){
    	$product = new Product;
    	$product->name = $request->product_name;
    	$product->id_type = $request->product_type;
    	$product->description = $request->product_desc;
    	$product->unit_price = $request->product_unit_price;
    	$product->promotion_price = $request->product_promotion_price;
    	$product->unit = $request->unit;
    	$product->new =$request->product_new;
    	$product->save();
    	return redirect('/admin/products');
    }
     public function getUsers(){
        $users = User::all();

        return view('admin.user',array(
            'users'=>$users
        ));
    }
}
