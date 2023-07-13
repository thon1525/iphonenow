<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function makeadmin(Request $rq){
    // make loged now 
    $getname=$rq->input("name");
    $getemail=$rq->input("email");
    $getpassword=$rq->input("password");
        
        $data=[
        'name_Admid'=>$getname,
        'email_Admid'=>$getemail,
        'password_Admid'=>$getpassword,
        'user'=>null,
        ];
      DB::table('adminsingup')->insert($data);
      echo 'has completed';
  }
  public function make(Request $rq){
    $takenameuser =$rq->input("nameuser");
    $takeemailuser =$rq->input("emailuser");
    $takepassworduser =$rq->input("passworduser");
    $data=[
   'name_user'=> $takenameuser,
   'email_user'=> $takeemailuser,
   'password_user'=> $takepassworduser,
    ];
    DB::table('tableuser')->insertOrIgnore($data);
    echo '<script>alert("complete");</script>';
  }
  public function showdata(){
 
  return  DB::table('adminsingup')->
  join('tableuser','adminsingup.user',"=",'tableuser.user')->get();
  ;
   
  }
}
