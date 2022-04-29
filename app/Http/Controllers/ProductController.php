<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProductController extends Controller
{
    public function show(Request $request){
        $search= $request['search']??"";
        $order = $request['prorder']??"";
        $qnorder = $request['qnorder']??"";
        $porder = $request['porder']??"";
        if ($search!= "") {
           //where clause is using for search
           $product = product::where('product_name','LIKE',"%$search%")->paginate(); 
           return view('product',['products'=>$product, 'search'=>$search]);
        }
        elseif ($order!="") {
            $product = product::
                orderBy('product_name', 'asc')
                ->paginate(4);
                return view('product',['products'=>$product]);
                
                
        }
        elseif ($qnorder!="") {
            $product = product::
                orderBy('quantity', 'asc')
                ->paginate(4);
                return view('product',['products'=>$product]);
                
                
        }
        elseif ($porder!="") {
            $product = product::
                orderBy('price', 'asc')
                ->paginate(4);
                return view('product',['products'=>$product]);
                
                
        }
        else {
            
            $product = product::paginate(4);
            return view('product',['products'=>$product]);
        }
    }
}