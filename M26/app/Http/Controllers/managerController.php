<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class managerController extends Controller
{
    
     public function index(Request $req){
      $buses = DB::table('buses')
                   ->join('users', 'users.u_id', '=', 'buses.m_id')
                   ->join('busesschedule', 'busesschedule.b_id', '=', 'buses.id')
                    ->get();
     	 return view('schedule.index', ['buses'=>$buses]);
      
     }
    
    
 
}