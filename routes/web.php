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


Route::resource('update', UpdateController::class);

Route::get('update/{update}', [UpdateController::class, 'show']);

Route::get('create', [UpdateController::class, 'create']);

Route::post('store', [UpdateController::class, 'store']);

Route::get('update/{update}/edit', [UpdateController::class, 'edit']);

Route::post('update-item/{update}/update', [UpdateController::class, 'update']);

Route::get('update/{update}/delete', [UpdateController::class, 'destroy']);