<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateController;
use App\Models\Fruit;

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

    $fruits = Fruit::tree()->get()->toTree();
    
    return view('welcome', [
        'fruits' => $fruits
    ]);
    
});


Route::get('/update', [UpdateController::class, 'index']);