<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return redirect()->route('destinations.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    $destinations = \App\Models\Destination::all();
    return view('landing.master', compact('destinations'));
})->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get("/halo", function () {
    $name = "Rozi";
    $hobis = ["Membaca", "Menulis", "Coding"];
    // melempar data ke view halo dengan compact
    return view('halo', compact('name', 'hobis'));
});
Route::get("/switch", function () {
    $role = "penulis";
    return view('switch', compact('role'));
});

Route::get("master", function () {
    return view('pages.home');
});

Route::get("/about", function () {
    return view('pages.about');
});
Route::get("/destinasi", function () {
    $destinasi = [
        "nama" => "Bali",
        "harga" => 5000000,
        "lokasi" => "Denpasar, Bali",
        "durasi" => "4 Hari 3 Malam",
        "transportasi" => "Pesawat",
        "hotel" => "Bintang 4",
        "rating" => 4.8,
        "fasilitas" => ["Hotel", "Sarapan", "Tour Guide", "Transport Lokal"],
    ];
    return view('pages.destinasi', compact('destinasi'));
});
Route::get("/profile-user", function () {
    $users = User::where('name', 'Rozi')->get();
    return view('pages.profile', compact('users'));
});


// Route::get(
//     "/destinations",
//     [DestinationController::class, 'index']
// );


// Route::get("/detaildestinasi/{id}", [DestinationController::class, 'show']);


// Route::get("/destinations/create", [DestinationController::class, 'create']);
// Route::post("/destinations", [DestinationController::class, 'store']);


// Route::delete('/destination/{id}', [DestinationController::class, 'delete']);


// Route::get("/destinations/{id}/edit", [DestinationController::class, 'edit']);
// Route::put("/destinations/{id}/update", [DestinationController::class, 'update']);

Route::prefix('destinations')->name('destinations.')->middleware('auth')->group(function () {
    Route::get('/', [DestinationController::class, 'index'])->name('index');
    Route::get('/create', [DestinationController::class, 'create'])->name('create');
    Route::post('/', [DestinationController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [DestinationController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DestinationController::class, 'update'])->name('update');
    Route::delete('/{id}', [DestinationController::class, 'delete'])->name('destroy');
    Route::get("/{id}/show", [DestinationController::class, 'show'])->name('show');
});



Route::prefix('users')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::get("/{id}/show", [UserController::class, 'show'])->name('show');
});

Route::resource('attractions', \App\Http\Controllers\AttractionController::class)->middleware('auth');


Route::resource('reviews', \App\Http\Controllers\ReviewController::class);
