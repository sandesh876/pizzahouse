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
         $pizza=Pizza::findOrFail($id);
    return view('pizzas.show',['pizza'=>$pizza]);  
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
       // error_log(request('name'));
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();
        return redirect('/')->with('mssg','Thank you for Your Order');
    }
}
