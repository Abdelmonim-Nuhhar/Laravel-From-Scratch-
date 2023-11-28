<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


/*
Route::get('anas', function () {
    return response('<h2>Hello  Anas mess!!</h2>', 200);
});

Route::get('/hilmee/{id}', function ($id) {
    return response('<h2>Hello Hilmee your age is </h2>' . $id);
}) -> where('id', '[0-9]+') ;

Route::get('/search', function (Request $request) {
    return $request->name. ' ' . $request->city;
});*/



