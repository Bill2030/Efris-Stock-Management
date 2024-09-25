<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("index", compact("products"));
    }

    public function filter(Request $request)
    {


        $batchdate = Carbon::parse($request->batchDate);
        $products = Product::where("batchDate", $batchdate)->paginate(8);
        //dd($products);

        return view("index", compact("products"));
    }
}
