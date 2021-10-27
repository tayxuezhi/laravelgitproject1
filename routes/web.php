<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Models\userNodel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('project1');
});

Route::get('insert',[userController::class,'insertform']);
Route::post('/action_page.php',[userController::class,'insert']);

Route::get('/viewRecord', function () {

    $viewRecord = DB::table('project1')->get();

    return view('viewRecord', ['viewRecord' => $viewRecord]);
});