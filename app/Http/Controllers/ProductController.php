<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $items = $request['items'] ?? 10;    //Pagination
        $search = $request['search'] ?? ""; // Searching
        $order = $request['orderby'] ?? ""; //Order
        

        //Condition and Query prepared for Search
        if ($search != "") {
            //where clause is using for search
            $product = product::where('product_name', 'LIKE', "%$search%")->paginate();
            return view('product', ['products' => $product, 'search' => $search]);

        //Condition and Query prepared for Order of Column
        } elseif ($order != "") {
            $product = product::orderBy($request['orderby'], 'asc')
                ->paginate($items);
            return view('product', ['products' => $product]);
        }
        
        else {

            $product = product::paginate($items);
            return view('product', ['products' => $product, 'items'=>$items]);
        }
    }
}
