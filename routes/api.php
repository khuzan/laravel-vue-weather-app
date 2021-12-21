<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/weather', function() {
    $apiKey = config('services.openweathermap.key');
    $lat = request('lat');
    $lng = request('lng');

    $response = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lng&exclude=hourly,minutely&appid=$apiKey");
    
    return $response->json();
});

Route::get('/places', function() {
    $apiKey = config('services.geoapify.key');
    $query = request('query');

    $response = Http::get("https://api.geoapify.com/v1/geocode/search?text=$query&apiKey=$apiKey");
    
    return $response->json();
});
