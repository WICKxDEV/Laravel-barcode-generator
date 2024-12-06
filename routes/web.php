<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('barcode-save', function () {
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $image = $generatorPNG->getBarcode('000005263635', $generatorPNG::TYPE_CODE_128);

    Storage::put('barcodes/demo.png', $image);

    return response($image)->header('Content-type','image/png');
});
