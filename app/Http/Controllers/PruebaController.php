<?php

namespace App\Http\Controllers;

use OpenExchangeRates\Services\OpenExchangeRates;

class PruebaController extends Controller
{
    public function prueba()
    {
        //The currencies that the api supports are obtained
        $openExchangeRates = app(OpenExchangeRates::class);
        $rates = $openExchangeRates->latest();
        //The conversion is obtained by multiplying the CLP value by the amount entered.
        $totalConvert = $rates['rates']['CLP'] * 10;
        $truncateconvert = round($totalConvert,2);
        //The already converted currency is returned
        return $truncateconvert;
    }
}
