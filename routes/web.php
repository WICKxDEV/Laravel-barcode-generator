<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('barcode-blade', function () {
    $generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
    $barcode = $generatorHTML->getBarcode('0001245259636', $generatorHTML::TYPE_CODE_128);

    return view('barcode', compact('barcode'));
});
