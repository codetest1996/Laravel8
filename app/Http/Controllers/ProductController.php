<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Product;

class ProductController extends Controller
{
    
    function index(){

        $data=Product::query()->paginate(4);
        
        return view('product', ['list'=>$data]);
    }

    function select(Request $request){

        $sdata=Arr::get($request->all(),'select_p');
       
        $data=Product::query()
            ->when($sdata,function($query, $sdata){
                return $query
                    ->where('p_label','like',"%$sdata%")
                    ->orwhere('p_name','like',"%$sdata%")
                    ->orwhere('o_price','like',"%$sdata%");
            })
            ->get();

       
        // echo $this->getRawQuery($data);
        return view('select', ['list'=>$data]);

    }


    public function getRawQuery($sql){
        $query = str_replace(array('?'), array('\'%s\''), $sql->toSql());
        $query = vsprintf($query, $sql->getBindings());
        return $query;
    }

}
