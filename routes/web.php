<?php

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => [
            'listing' => [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'For your business, too, your customers’ wins are your wins. 
                If you’re a small retailer, this is true not just with your in-store customer service,
                 but also your ecommerce website’s overall UX, its check-out flow, 
                 your online return options, and your product descriptions.'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'For your business, too, your customers’ wins are your wins. 
                If you’re a small retailer, this is true not just with your in-store customer service,
                 but also your ecommerce website’s overall UX, its check-out flow, 
                 your online return options, and your product descriptions.'
            ]

        ]
    ]);
});
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



