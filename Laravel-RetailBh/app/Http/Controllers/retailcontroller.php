<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class retailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RetailStore.exp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
       $firstname=$request->input('fname');
       $lastname=$request->input('lname');
       $email=$request->input('email');
       $mobile=$request->input('phone');
       $password=$request->input('password');
        $cpassword=$request->input('cpassword');

       if( $password == $cpassword )
       {

      $result=DB::table('user_info')->insert(['first_name'=>$firstname,'last_name'=> $lastname,'email'=>$email,'mobile'=>$mobile,'password'=>$password,'address1'=>'','address2'=>'','country'=>'','address_instruction'=>'']);  
      if($result){
            echo "<script>alert('added successfully');window.location.href=('/index');</script>";
            // return redirect('/index');
       }else
       {
        echo "<script>alert('registration failed')</script>";
       }
   }
   else{
     echo "<script>alert('password and confirm password not matched')</script>";

   }
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function show($id)
    //{
        //
   // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function select(Request $req )
    {
        $emailid=$req->input('email');

        $password=$req->input('password');
         $select=DB::table('user_info')->select('*')->where('email',$emailid)->where('password',$password)->count();
        if($select>0){
            $select1=DB::table('user_info')->select('*')->where('email',$emailid)->where('password',$password)->get();
             foreach($select1 as $sel){
               $useridd=$sel->user_id;

             }
$req->session()->put('idd',$useridd);

             $update=DB::table('cart')->where('user_id',-1)->update(['user_id'=>Session::get('idd')]);
             $update=DB::table('wishlist')->where('user_id',-1)->update(['user_id'=>Session::get('idd')]);
            $email=$req->session()->put('email', $emailid);
          
          return redirect('/profile');
        }else{
        echo "failed";
        }

     }

    //     foreach($select as $sel){
    //    if($select){
    //         echo "Login successful";
    //     }else{
    //         echo "login failed";
    //     }
        
       
    // }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logout $log)
    {
        
    }
    public function logout(Request $log)
    {
     $log->session()->forget('idd');
     return redirect('/index');
    }
}


