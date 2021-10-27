<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\userController;
use App\Models\userNodel;

class userController extends Controller
{
    public function insertform()
    {
        return view('project1');
            }
                public function insert(Request $request)
                {
                    $username = $request->input('username');
                    $email = $request->input('email');
                    $password = $request->input('password');
                    $data=array('username'=>$username,"email"=>$email,"password"=>$password);
                    DB::table('project1')->insert($data);
                    echo "You have successfull sign up.<br/>";
                    echo '<a href = "/insert">Click Here</a> to go back.';
                }

}



?>