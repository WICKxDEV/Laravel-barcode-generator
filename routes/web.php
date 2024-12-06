<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('barcode', function () {
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $image = $generatorPNG->getBarcode('000005263635', $generatorPNG::TYPE_CODE_128);

    return response($image)->header('Content-type','image/png');
});
