<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [HomeController::class,"index"]);

// Route::get('/admins/home', [AdminController::class,'admins']);
// Route::get('/user/home', [UserController::class,'user']);

Route::get('/home', [HomeController::class,'redirect'
])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/add_doctor_view", [AdminController::class,"addview"]);
Route::post("/upload_doctor", [AdminController::class,"upload"]);
Route::post("/appointment", [HomeController::class,"appointment"]);
Route::get("/myappointment", [HomeController::class,"myappointment"]);
Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);
Route::get('show_appointment', [AdminController::class,'show_appointment']);
Route::get('/approved/{id}' , [AdminController::class,'approved']);
Route::get('/canceled/{id}' , [AdminController::class,'canceled']);
Route::get('/show_doctor' , [AdminController::class,'show_doctor']);
Route::get('/delete_doctor/{id}' , [AdminController::class,'delete_doctor']);
Route::get('/update_doctor/{id}', [AdminController::class,'update_doctor']);
Route::post('/edit_doctor/{id}' , [AdminController::class,'edit_doctor']);
Route::post('/email_view/{id}' , [AdminController::class,'email_view']);
Route::get('/text_doctor' , [AdminController::class,'text_doctor']);
// Route::post('/email_send/{id}', [AdminController::class,'email_send']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
