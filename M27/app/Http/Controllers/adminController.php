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
                   ->join('users', 'users.u_id', '=', 'buses.m_id')
                    ->get();
     	 return view('home.index', ['buses'=>$buses]);
      
     }
    public function search(Request $req){

       $term=$req->term;

      $iteams= DB::table('buses')
            ->join('users', 'users.u_id', '=', 'buses.m_id')
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
                   ->join('users', 'users.u_id', '=', 'buses.m_id')
                   ->where('name',$term)
                   ->orwhere('location',$term)
                   ->orwhere('seat_row',$term)
                   ->orwhere('seat_column',$term)
                   ->orwhere('company',$term)

                   ->orwhere('name','like','%'.$term.'%')
                   ->get();
    return view('home.index', ['buses'=>$buses]);      
           
    }


  public function addbus(){

    
    return view('home.addbus');      
           
    }

  public function addbusverify(Request $req){
         
          $validation = Validator::make($req->all(), [
            'name'=>'required',
            'location'=>'required',
             'operator'=>'required',
             'seat_row'=>'required',
             'seat_column'=>'required',
              'company'=>'required'
        ]);

         if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

            return redirect()->route('home.addbus')
                            ->with('errors', $validation->errors())
                            ->withInput();
            }
       else
       {

           DB::table('buses')->insert(
           ['name' =>$req->name, 'location'=>$req->location,'operator'=>$req->operator,'seat_row'=>$req->seat_row,  'seat_column'=>$req->seat_column,'company'=>$req->company ]
            );
           return redirect()->route('home.index');  
       }


       }


        public function editbus($id){

     $buses = DB::table('buses')
                    -> where('id',$id)
                    ->get();
       return view('home.editbus', ['buses'=>$buses]);
             
           
      }


       public function editbusverify($id,Request $req){
         
          $validation = Validator::make($req->all(), [
            'name'=>'required',
            'location'=>'required',
             'operator'=>'required',
             'seat_row'=>'required',
             'seat_column'=>'required',
              'company'=>'required'
        ]);

         if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

            return redirect()->route('home.addbus')
                            ->with('errors', $validation->errors())
                            ->withInput();
            }
       else
       {

        DB::table('buses')
            ->where('id',$id)
            ->update( ['name' =>$req->name, 'location'=>$req->location,'operator'=>$req->operator,'seat_row'=>$req->seat_row,  'seat_column'=>$req->seat_column,'company'=>$req->company ]);


          
           return redirect()->route('home.index');  
       }

     }   



       public function deletebus($id){

     $buses = DB::table('buses')
                    -> where('id',$id)
                    ->get();
       return view('home.deletebus', ['buses'=>$buses]);
             
           
      }

      public function destroy($id, Request $req){
  
    DB::table('buses')->where('id', $id)->delete();
      return redirect()->route('home.index');
    
    }

    public function index2(Request $req){
     $buses = DB::table('buses')
                   ->join('users', 'users.u_id', '=', 'buses.m_id')
                   ->join('busesschedule', 'busesschedule.b_id', '=', 'buses.id')
                    ->get();
       return view('schedule.index', ['buses'=>$buses]);
      
     }

    
 
}