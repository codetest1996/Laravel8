<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    function index(){

        $data=Product::query()->paginate(4);

        return view('product', ['list'=>$data,'page_list'=>$data,'total_list'=>$data->total()]);
    }

    function select(Request $request){
        $data=$request->all()["select_p"];
       
        $sql=Product::query()->whereRaw(" (p_label ='%{$data}%' or  p_name ='%{$data}%' or o_price ='%{$data}%') ")->get();

    }

}
