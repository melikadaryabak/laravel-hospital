<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{

    public function index(){

        
        // $testi = Test::all();
        // $data = [
        //     'testi' => $testi
        // ];
        return view('index');
    
}

    // public function index(){

        
    //         // $testi = Test::all();
    //         // $data = [
    //         //     'testi' => $testi
    //         // ];
    //         return view('index', $data );
        
    // }

    // public function show($id){
    //     // $id = Test::findOrFail($id);
    //     // $id = [
    //     //     'id' => $id
    //     // ];
    //     return view('index', $id);
    // }

    // public function store(){

    //     // $hh = new Test();

    //     // $hh->name = request('name');
    //     // $hh->email = request('email');

    //     // $hh->save();

    //     return redirect('/')->with('mssg','thnx');
    // } 
    
}
