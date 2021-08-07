<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SiteController extends Controller
{
    public function index()
    {
    	$models = Products::all();
    	return view('index', ['models'=>$models]);
    }
     public function card($pack_id)
    {
    	$model = Products::find($pack_id);
    	$models = Products::where('product_title', $model->product_title)->get();
    	return view('card', ['models'=>$models]);
    }
    public function card_category($pack_id)
    {
    	$model = Products::find($pack_id);
    	$models = Products::where('category', $model->category)->get();
    	return view('card', ['models'=>$models]);
    }
     public function cards()
    {
    	$models = Products::all()->unique('product_title');
    	return view('cards', ['models'=>$models]);
    }
}
