<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password1 = $request->input('password');
        $password=bcrypt($password1);


        $sign = "+";
        if(strlen($name) < 1){
            return response(array(
                "Message" => "Please enter your full names",
                "code" => 209,
                "status" => "fail",
            ));
        }else if(strlen($phone) != 10 && strlen($phone) != 13 ){
            return response(array(
                "Message" => "Please enter a valid phone number",
                "code" => 209,
                "status" => "fail",
            ));
        }else if((strlen($phone) == 10 && ($phone[0] != 0))){
            return response(array(
                "Message" => "Please enter a valid phone number",
                "code" => 209,
                "status" => "fail",
            ));
        }
        else if((strlen($phone) == 13 && ($phone[0] != $sign))){
            return response(array(
                "Message" => "Please enter a valid phone number",
                "code" => 209,
                "status" => "fail",
            ));
        }
        else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
            return response(array(
                "Message" => "Please enter a valid Email",
                "code" => 209,
                "status" => "fail",
            ));
        }
        else if(strlen($password) < 1 ){
            return response(array(
                "Message" => "Please enter your password",
                "code" => 209,
                "status" => "fail",
            ));
        }


        else{


            $users = DB::table('users')
                ->insert(['name' => $name, 'phone' => $phone, 'email' => $email, 'password' => $password]);

//            $this->sendEmail($email);
//            $this->send($phone, $code);
            if($users){

                return response(array(
                    "Message" => "Registration successful",
                    "code" => 200,
                    "status" => "success",
                ));
            }else{
                return response(array(
                    "Message" => "Registration failed",
                    "code" => 500,
                    "status" => "fail",
                ));
            }
        }
    }

    public function login(Request $request){

        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');


        $check = 0;



        if(count($phone) > 0){
            $usePhone = DB::table('users')->where(['phone'=>$phone, 'password'=>$password])->get();
            if(count($usePhone) > 0){
                $check = 1;
            }
        }
        if(count($email) > 0){
            $useEmail = DB::table('users')->where(['email'=>$email])->get();
            if(count($useEmail) > 0){
                $check = 1;
            }
        }
        if($check > 0){

            $persons = DB::table('users')->select('name','id','email','phone','password')->where(['email'=>$email])->get();
            $persons2 = DB::table('users')->select('name',  'id','phone','email')->where(['phone'=>$phone])->get();
            if((count($persons) > 0)){

                foreach ($persons as $member)
                {
                    if (Hash::check($password, $member->password)) {
                        $name = $member->name;
                        $id = $member->id;
                        $phone = $member->phone;
                        $email = $member->email;
                    }


                }

            }else{

                foreach ($persons2 as $member)
                {
                    $name = $member->name;
                    $id = $member->id;
                    $phone = $member->phone;
                    $email = $member->email;


                }
            }

//                        $sessionValue = $request->session()->put('id', $id);
//                        if($request->session()->has('id')){
//                            $sessionValue = $request->session()->get('id');
//
//                        }

            return response(array(
                'Message' => 'Log in successful',
                'status' => 'success',
                'id' => $id,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,


//                            'session' => $sessionValue,

            ),200);
        }else{
            return response(array(
                "Message" => "Authentication failed, details provided are invalid",
                'status' => 'fail'
            ));

        }

    }
}
