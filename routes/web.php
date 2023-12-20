<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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
//TOP
Route::get('/', function () {
    return view('index', ['index' => 'true']);
});
//company
Route::get('/company', function () {
    return view('company', ['index' => 'false']);
});
//works
Route::get('/works', function () {
    return view('works', ['index' => 'false']);
});


//contact
Route::get('/contact', function () {
    return view('contact', ['index' => 'false']);
})->name('contact');
//confirm
Route::post('/contact/confirm', [ContactController::class, "confirm"]);
//submit
Route::post('/contact/thanks', [ContactController::class, "send"]);
