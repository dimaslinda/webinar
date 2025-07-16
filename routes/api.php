<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidtransCallbackController;

// Endpoint callback notifikasi pembayaran dari Midtrans
Route::post('/midtrans/callback', [MidtransCallbackController::class, 'handle']);
