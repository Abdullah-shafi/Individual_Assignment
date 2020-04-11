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
    public function search(Request $req){

       $term=$req->term;

      $iteams= DB::table('buses')
            ->join('users', 'users.b_id', '=', 'buses.id')
            ->where('name','like','%'.$term.'%')
            ->orwhere('location','like','%'.$term.'%')
            ->orwhere('seat_row','like','%'.$term.'%')
             ->orwhere('seat_column','like','%'.$term.'%')
              ->orwhere('company','like','%'.$term.'%')
            ->get();

       foreach ($iteams as $key => $value) {
               $searchResult[]=$value->name;
            }

        return $searchResult;       
    }
   public function search_2(Request $req){

       $term=$req->name;
       $buses = DB::table('buses')
                   ->join('users', 'users.b_id', '=', 'buses.id')
                   ->where('name',$term)
                   ->orwhere('location',$term)
                   ->orwhere('seat_row',$term)
                   ->orwhere('seat_column',$term)
                   ->orwhere('company',$term)

                   ->orwhere('name','like','%'.$term.'%')
                   ->get();
    return view('home.index', ['buses'=>$buses]);      
           
    }
    


}