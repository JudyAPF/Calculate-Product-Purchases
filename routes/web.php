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
    return view('welcome');
});

Route::view('/product_form', 'product_form')->name('product_form');

Route::post('/result', function (Request $request) {
    $productName = $request->input('product_name');
    $quantity = $request->input('quantity');
    $price = $request->input('price');
    $amountPaid = $request->input('amount_paid');

    $totalPrice = $quantity * $price;
    // $tax = $totalPrice * 0.15;
    // $finalPrice = $totalPrice + $tax;
    $change = $amountPaid - $totalPrice;

    // Format finalPrice and change to two decimal places
    $finalPrice = number_format($totalPrice, 2);
    $change = number_format($change, 2);

    if ($amountPaid < $finalPrice) {
        return redirect()->route('product_form')->with('error', 'Insufficient amount paid.');
    }

    return view('result', compact('productName', 'quantity', 'price', 'finalPrice', 'change', 'amountPaid'));
})->name('result');
