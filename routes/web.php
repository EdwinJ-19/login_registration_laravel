<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {  
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');  

// Route::redirect('/'.'/note')->name('dashboard');
Route::redirect("/","note")->name("dashboard");


Route::middleware(['auth','verified'])->group(function (){
    // Route::get('/note', [NoteController::class,'index'])->name('note.index');
    // Route::get('/note/create',[NoteController::class,'create'])->name('note.create');
    // Route::get('/note/{id}/show', [NoteController::class, 'show'])->name('note.show');
    // Route::get('/note/{id}/edit', [NoteController::class,'edit'])->name('note.edit');
    // // backend logic below here
    // Route::post('/note',[NoteController::class,'store'])->name('note.store');
    // Route::put('/note/{id}',[NoteController::class,'update'])->name('note.update');
    // Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

    //shorthand way to route in resouce controller


    // Route::post('/note/note.store',[NoteController::class,'store'])->name('note.store');

    Route::resource('note',NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
