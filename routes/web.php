<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostsController;
use App\Http\Controllers\FoundsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\LostandFoundController;
use App\Models\Testimonials;
use App\Models\Losts;
use App\Models\Founds;


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
    return view('welcome');
});

Route::post('/postlogin', [App\Http\Controllers\AuthController::class, 'postlogin'])->name('login.post'); 
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::get('/signup', [App\Http\Controllers\AuthController::class, 'signup']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/homepageadmin', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/delete-losts/{id}', [LostsController::class, 'delete']);
Route::get('/remove-losts/{id}', [LostsController::class, 'destroy'])->name('losts.destroy');

Route::get('/delete-founds/{id}', [FoundsController::class, 'delete']);
Route::get('/remove-founds/{id}', [FoundsController::class, 'destroy'])->name('founds.destroy');


Route::group(['middleware' => ['auth', 'CheckRole:user']], function(){

    //Tampilan untuk beranda user
    Route::get('/lostandfound', [App\Http\Controllers\LostandFoundController::class, 'lostandfound']);

    //Untuk Lost
    Route::get('/losts', [LostsController::class, 'index'])->name('losts');
    Route::get('/losts/{id}', [LostsController::class, 'detail']);
    Route::get('/edit-losts/{id}', [LostsController::class, 'edit']);
    Route::put('/losts/{id}', [LostsController::class, 'update']);
    Route::get('/add-losts', [LostsController::class, 'new']);
    Route::post('/losts', [LostsController::class, 'store']);
    

    //Untuk Found
    Route::get('/founds', [FoundsController::class, 'index'])->name('founds');
    Route::get('/founds/{id}', [FoundsController::class, 'detail']);
    Route::get('/edit-founds/{id}', [FoundsController::class, 'edit']);
    Route::put('/founds/{id}', [FoundsController::class, 'update']);
    Route::get('/add-founds', [FoundsController::class, 'new']);
    Route::post('/founds', [FoundsController::class, 'store']);
    

    //Untuk Testi
    Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
    Route::get('/testimonials/{id}', [TestimonialsController::class, 'detail']);
    Route::get('/edit-testimonials/{id}', [TestimonialsController::class, 'edit']);
    Route::put('/testimonials/{id}', [TestimonialsController::class, 'update']);
    Route::get('/add-testimonials', [TestimonialsController::class, 'new']);
    Route::post('/testimonials', [TestimonialsController::class, 'store']);
    Route::get('/delete-testimonials/{id}', [TestimonialsController::class, 'delete']);
    Route::delete('/testimonials/{id}', [TestimonialsController::class, 'destroy']);

});

//Route::get('/lostandfound', [App\Http\Controllers\LostandFoundController::class, 'lostandfound'])->middleware('auth');
//Route::get('/lockscreen', [App\Http\Controllers\AuthController::class, 'lockscreen']); 