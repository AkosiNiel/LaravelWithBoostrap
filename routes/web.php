<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
#basic route handling get request
// Route::get('/about', function () {
//     return view('pages.about');
// });

#Using adding dynamic routes handling get request with parameters

// Route::get('/users/{id}', function ($id) {
//     return 'This is user '.$id;
// }); 

#addinng constraints to dynamic routes example adding id and name

// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'This is user '.$name.' with id '.$id;
// }); 

#clean method to handle routes using controller

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

