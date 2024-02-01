<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Cum;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function category(){
        $categories = Category::where('is_active', 1)->get();
        return view('category', compact('categories'));
    }
    public function products($id){
        $products = Product::where('category_id', $id)->where('is_active', 1)->get();
        return view('products', compact('products'));
    }
    public function product($id){
        $product = Product::where('id', $id)->where('is_active', 1)->first();
        return view('single-product', compact('product'));
    }
    public function collection(){
        $collections = Collection::where('is_active', 1)->get();
        return view('collection', compact('collections'));
    }
    public function cums($id){
        $cums = Cum::where('collection_id', $id)->where('is_active', 1)->get();
        return view('cums', compact('cums'));
    }
    public function cum($id){
        $cum = Cum::where('id', $id)->where('is_active', 1)->first();
        return view('single-cum', compact('cum'));
    }
}
