<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    // $responseWeather = Http::get('http://api.weatherapi.com/v1/current.json?KEY=95c3ba137edc4073bdc175146232102&q=Yogyakarta&hour=' . $hours);
    // $responseAirQuality = Http::get('http://api.weatherapi.com/v1/forecast.json?KEY=95c3ba137edc4073bdc175146232102&q=Yogyakarta&aqi=yes&days=14');
    // Storage::put('yogyaArea.txt', $responseAirQuality->body());
    $filePath = Storage::path('yogyaArea.txt');
    $fileLocation = fopen($filePath, "r");
    $responseWeather = fread($fileLocation, filesize($filePath));
    fclose($fileLocation);
    // foreach (json_decode($responseWeather)->forecast->forecastday as $index => $day) {
    //     // if (date('Y-m-d') == $day->date && $index == 13) {
    //     //     dd(date('Y-m-d'), $day->date);
    //     // }
    //     // if (date('Y-m-d') == $day->date && $index == 13) {
    //     //     $responseAirQuality = Http::get('http://api.weatherapi.com/v1/forecast.json?KEY=95c3ba137edc4073bdc175146232102&q=Yogyakarta&aqi=yes&days=14');
    //     //     Storage::put('yogyaArea.txt', $responseAirQuality->body());
    //     //     $filePath = Storage::path('yogyaArea.txt');
    //     //     $fileLocation = fopen($filePath, "r");
    //     //     $responseWeather = fread($fileLocation, filesize($filePath));
    //     //     fclose($fileLocation);
    //     // }
    //     # code...
    // }
    return view('welcome', ['responseWeather' => json_decode($responseWeather)]);
});
