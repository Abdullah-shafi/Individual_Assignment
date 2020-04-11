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
      public function searchbus(Request $req){

       $term=$req->term;

      $iteams= DB::table('buses')
            ->join('users', 'users.u_id', '=', 'buses.m_id')
             ->join('busesschedule', 'busesschedule.b_id', '=', 'buses.id')
            ->where('name','like','%'.$term.'%')
            
            ->get();

       foreach ($iteams as $key => $value) {
               $searchResult[]=$value->name;
            }

        return $searchResult;       
    }
   public function searchbus_2(Request $req){

      
       $buses = DB::table('buses')
                   ->join('users', 'users.u_id', '=', 'buses.m_id')
                   ->join('busesschedule', 'busesschedule.b_id', '=', 'buses.id')
                   ->where('name',$req->name)
                   ->orwhere('route',$req->name)
                   ->orwhere('fare',$req->name)
                   ->orwhere('departure',$req->name)
                   ->orwhere('arrival',$req->name)
                   ->orwhere('location',$req->name)
                  
                   ->get();
    return view('schedule.index', ['buses'=>$buses]);     
           
    }
    
    
 
}