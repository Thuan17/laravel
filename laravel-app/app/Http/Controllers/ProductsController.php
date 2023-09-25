<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title='Laravel Huynh Gia Thuan';
        $name='Gia Thuan';
        $myphone=[
            'name'=>'12 pro max',
            'year'=>2021
        ];

        // return View('products.index',compact('myphone'));
        // return View ('products.index',[
        //     'myphone'=>$myphone
        // ]);
            print_r(route('products'));
            return view('products.index');




    }


    public function about(){
        return '';
    }
    public function detail ($productName,$id){
        // return 'products id = '.$id;
        // $phones=[
        //     'iphone 15'=>'iphone',
        //     'samsung'=>'samsung'
        // ];
        // return view('products.index',[
        //     'products'=>[
        //         'name'=>'25 pro max',
        //         'year'=>2023
                
        //     ]
        //     // 'products'=>$phones[$productName]
        // ]);
        // return view('products.index',[
        //     'products'=>$phones[$productName]??'Không có sản phẩm',
        // ]);
            return "name products ".$productName.
                    "id products".$id;
    }
}
