<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class busmanagerController extends Controller
{
    
     public function index(Request $req){
      $users = User::all();
     	 return view('home.index', ['users'=>$users]);
      
     }

     public function search(Request $req){

       $term=$req->term;
      $iteams= DB::table('users')
            ->where('name','like','%'.$term.'%')
            ->get();

       foreach ($iteams as $key => $value) {
               $searchResult[]=$value->name;
            }

        return $searchResult;       
    }
   public function search_2(Request $req){

       $term=$req->name;
       $users = User::all()
              ->where('name',$term);
    return view('home.index', ['users'=>$users]);      
           
    }


}