<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;

class ProductController extends Controller
{
    //
	public function index(){
		$new_products = Product::where('new',1)
						->orderBy('created_at','desc')
						->limit(4)					
						->get();

		return view('ban-banh.index',array(
			'new_products' => $new_products,
		));
	}

    public function getAllProducts(){
    	//get all products from db
		$products = Product::all();

		//show all products to client
		foreach ($products as $key => $value) {
			echo $key . ' - ' . $value->name . '<br>';
		}
    }

    public function getProductByType($id){
    	$products = Product::where('id_type',$id)->get();
    	$type = ProductType::all();

    	return view('ban-banh.product-by-type',array(
    		'products' => $products,
    		'type' => $type
    	));
    }
}
