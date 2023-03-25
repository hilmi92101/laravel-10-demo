<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Landing\IndexController;
use App\Http\Controllers\Broadcasting\DemoController as BroadcastingDemoController;
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

Route::get('/', [IndexController::class, 'index'])->name('landing.index');
Route::get('/about', [IndexController::class, 'about'])->name('landing.about');

Route::get('/broadcasting/demo', [BroadcastingDemoController::class, 'landing'])->name('broadcasting.landing');
Route::get('/broadcasting/demo/trigger-page', [BroadcastingDemoController::class, 'triggerPage'])->name('broadcasting.triggerPage');
Route::post('/broadcasting/demo/trigger-page/attempt', [BroadcastingDemoController::class, 'triggerPageAttempt'])->name('broadcasting.triggerPageAttempt');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
