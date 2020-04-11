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
      public function addbusschedule(){

    
    return view('schedule.add');      
           
    }

    public function addbusscheduleverify(Request $req){

     $validation = Validator::make($req->all(), [
            'b_name'=>'bail|required|exists:buses,name|unique:busesschedule',
            'route'=>'required',
             'fare'=>'required',
             'deparature'=>'required',
             'arrival'=>'required'
             
        ]);

         if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

            return redirect()->route('schedule.add')
                            ->with('errors', $validation->errors())
                            ->withInput();
            }
       else
       {
       	    $buses = DB::table('buses')
                   ->where('name',$req->b_name)
                   ->get();

                foreach ($buses as $key => $value) {
               $id=$value->id;
                }

           DB::table('busesschedule')->insert(
           ['b_id'=>$id,'b_name' =>$req->b_name, 'route'=>$req->route,'fare'=>$req->fare,'departure'=>$req->deparature,  'arrival'=>$req->arrival]
            );
           return redirect()->route('schedule.index');  
       }
   
           
    }
 
}