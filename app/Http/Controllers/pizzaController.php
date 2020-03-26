<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzaController extends Controller
{
    public function index(){
            //get data from db

    $name=request('name'); //grabbing the value of query parameters from url
    $pizzas=[
        ['type'=>'hawaiian','base'=>'cheesy crust'],
        ['type'=>'volcano','base'=>'garlic crust'],
        ['type'=>'veg supreme','base'=>'thin and crispy'] //passing arrays of data to template
    ];
   
    return view('pizzas',
    ['pizzas'=>$pizzas,
    'name'=>$name,
    'age'=>request('age') //next method to pass value to view from url
    ]);
    }

    public function show($id){
         //use the $id variable to query the db for a record
    return view('details',['id'=>$id]);  
    }
}
