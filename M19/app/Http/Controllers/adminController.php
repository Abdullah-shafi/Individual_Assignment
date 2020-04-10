<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class adminController extends Controller
{
    
     public function index(Request $req){
      $buses = DB::table('buses')
                   ->join('users', 'users.b_id', '=', 'buses.id')
                    ->get();
     	 return view('home.index', ['buses'=>$buses]);
      
     }

    


}