<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //return view('welcome');
    //return '<h>Zulhusni</h1>';
    //$x = 2;
    //$y = $x*2;
    //return $x + $y;

    //view()
    //inertia() - bergantung pada frontend

    //return response()->json([
    //    'message' => 'tahniah';
    //])

    return view('index', [
        'name' => 'Abu',
        'workplace' => 'MOHR',
    ]
    );
});

//route::method('url', response);
//response => function, controller,
