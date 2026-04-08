<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Destination;

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
Route::get("/user", function () {
    $users = User::where('name', 'Rozi')->get();
    return view('pages.profile', compact('users'));
});


Route::get("/destinations", function () {

    $destinations = Destination::all();
    return view('pages.indexDestinasi', compact('destinations'));
});


Route::get("/detaildestinasi/{id}", function ($id) {
    $destination = Destination::find($id);
    return view('pages.detaildestinasi', compact('destination'));
});
