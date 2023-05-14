<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Th_Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.home-th');
// });

Route::controller(Th_Controller::class)->group(function(){
    Route::get('/','IndexHome');   
    Route::get('/Thai/home-th/{parameter_language?}','GetArgumentIndexHome');
    Route::get('/Thai/th-product/{parameter_language?}','IndexThProduct');
    Route::get('/Thai/th-contact-us/{parameter_language?}','IndexThContract');
    Route::get('/Thai/th-about-us/{parameter_language?}','IndexThAbout');
    Route::get('/Thai/th-durian-story/{parameter_language?}','IndexThDurian');
    Route::get('/Thai/job/index/{parameter_language?}','Indexjob');
   
});

