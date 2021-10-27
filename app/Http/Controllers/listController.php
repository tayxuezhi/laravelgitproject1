<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\listController;

class listController extends Controller
{
    //
    public function index(){
        $username = DB::select('select * from project1');
        return view('viewRecord',['username'=>$username]);
        }
}

?>