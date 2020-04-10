<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class LoginController extends Controller
{
    
    public function index(Request $req){
    	return view('login.index');
    }

    public function verify(Request $req){
 

       $validation = Validator::make($req->all(), [
            'email'=>'bail|required|email|exists:users,email',
            'password'=>'required'
            
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

            return redirect()->route('/system/supportstaff/login')
                            ->with('errors', $validation->errors())
                            ->withInput();
            }

            else {
                 $user = DB::table('users')
                    ->where('email', $req->email)
                    ->where('password', $req->password)
                    ->first();

                 if($user->role=='busmanager'){
                   $req->session()->put('email', $req->email);
                   return redirect()->route('home.index');
               }

              else{
                   $req->session()->put('email', $req->email);
                   return redirect()->route('/system/staff');
               }


              }

                
            }
          



}