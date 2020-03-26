<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class pizzaController extends Controller
{
    public function index(){
            //get data from db

    //$name=request('name'); //grabbing the value of query parameters from url
   // $pizzas=Pizza::all(); //using Pizza Model to fetch all data from database
    //  $pizzas=Pizza::orderBy('name','desc')->get();
   // $pizzas=Pizza::where('type','hawaian')->get();//select data according to conditions
   $pizzas=Pizza::latest()->get();


    return view('pizzas.index',
    ['pizzas'=>$pizzas
    //'name'=>$name,
    //'age'=>request('age') //next method to pass value to view from url
    ]);
    }

    public function show($id){
         //use the $id variable to query the db for a record
    return view('pizzas.show',['id'=>$id]);  
    }

    public function create(){
        return view('pizzas.create');
    }
}
