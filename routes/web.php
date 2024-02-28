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

// Route::get('/Hello', function () {
//     return ('Hello World');

// use Illuminate\Support\Facades\Route;
// Route::get('/world', function () {
//  return 'World';


// use Illuminate\Support\Facades\Route;
// Route::get('/welcome', function(){
//     return 'Selamat Datang';
// });


// use Illuminate\Support\Facades\Route;
// Route::get('/about', function(){
//     return 'NIM : 2241720193, NAMA : Rio Bagas Hermawan';
// });


// use Illuminate\Support\Facades\Route;

// Route::get('/user/{rio}', function ($name) {
//     return 'Nama Saya '.$name;
// });

// use Illuminate\Support\Facades\Route;

// Route::get('/posts/{post}/comments/{comment}', function 
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// use Illuminate\Support\Facades\Route;
// Route::get('/articles/{id}', function 
// ($id) {
//  return 'Halaman Artikel dengan ID - '.$id;
// });

// use Illuminate\Support\Facades\Route;

// Route::get('/user/{rio?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

// use Illuminate\Support\Facades\Route;


// Route::get('/user/profile', function () {
//    ->name('profile');
//    Route::get('/user/profile',[UserProfileController::class, 'show'])->name('profile');
//    // Generating URLs...
//    $url = route('profile');
//    // Generating Redirects...
//    return redirect()->route('profile');
// });

// use App\Http\Controllers\WelcomeController;
// use Illuminate\Support\Facades\Route;

// Route::get('/hello', [WelcomeController::class, 'hello']);

// use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);


// use App\Http\Controllers\PhotoController;
// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only(['index', 'show']);
// Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

// Route::get('/greeting', function () {return view('hello', ['name' => 'Rio Bagas']);});
    
// Route::get('/greeting', function () {return view('blog.hello', ['name' => 'Rio Bagas']);});


use App\Http\Controllers\WelcomeController;

Route::get('/greeting', [WelcomeController::class, 'greeting']);