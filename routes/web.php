<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostsController;
use App\Http\Controllers\FoundsController;
use App\Http\Controllers\TestimonialsController;
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

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/losts', [LostsController::class, 'index'])->name('losts');
Route::get('/losts/{id}', [LostsController::class, 'detail']);
Route::get('/edit-losts/{id}', [LostsController::class, 'edit']);
Route::put('/losts/{id}', [LostsController::class, 'update']);
Route::get('/add-losts', [LostsController::class, 'new']);
Route::post('/losts', [LostsController::class, 'store']);
Route::get('/delete-losts/{id}', [LostsController::class, 'delete']);
Route::delete('/losts/{id}', [LostsController::class, 'destroy']);

Route::get('/founds', [FoundsController::class, 'index'])->name('founds');
Route::get('/founds/{id}', [FoundsController::class, 'detail']);
Route::get('/edit-founds/{id}', [FoundsController::class, 'edit']);
Route::put('/founds/{id}', [FoundsController::class, 'update']);
Route::get('/add-founds', [FoundsController::class, 'new']);
Route::post('/founds', [FoundsController::class, 'store']);
Route::get('/delete-founds/{id}', [FoundsController::class, 'delete']);
Route::delete('/founds/{id}', [FoundsController::class, 'destroy']);

Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/testimonials/{id}', [TestimonialsController::class, 'detail']);
Route::get('/edit-testimonials/{id}', [TestimonialsController::class, 'edit']);
Route::put('/testimonials/{id}', [TestimonialsController::class, 'update']);
Route::get('/add-testimonials', [TestimonialsController::class, 'new']);
Route::post('/testimonials', [TestimonialsController::class, 'store']);
Route::get('/delete-testimonials/{id}', [TestimonialsController::class, 'delete']);
Route::delete('/testimonials/{id}', [TestimonialsController::class, 'destroy']);