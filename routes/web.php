<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $message = '';
    try {
        $pdo = DB::connection()->getPdo();
        if ($pdo) {
            $message = 'connection active';
        }
    } catch (\Exception $e) {
        
    }

    return view('welcome', ['message' => $message]);
});
