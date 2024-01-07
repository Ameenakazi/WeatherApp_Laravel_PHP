<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    //
    public function index(){
        return view('weather');
    }

    public function getWeather(Request $request){
        $apiKey='36e6c630dee7c876d786f81171563e16';
        $city = $request->input('city');

        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");

        $weatherData =$response->json();

        return view('weather',compact('weatherData'));
    }
}
