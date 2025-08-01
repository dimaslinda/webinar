<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicWebinarRegistrationController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('index');
});

// Route form registrasi webinar publik
Route::get('/daftar', [PublicWebinarRegistrationController::class, 'showForm'])->name('daftar');
Route::post('/daftar', [PublicWebinarRegistrationController::class, 'submitForm']);

// Route invoice pembayaran
Route::get('/invoice/{id}/{token}', [\App\Http\Controllers\InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoice/download/{id}/{token}', [\App\Http\Controllers\InvoiceController::class, 'download'])->name('invoice.download');

Route::get('/invoice', function (\Illuminate\Http\Request $request) {
    $orderId = $request->query('order_id');
    if (!$orderId) {
        abort(404);
    }
    $registrant = \App\Models\WebinarRegistrant::where('order_id', $orderId)->firstOrFail();
    return redirect()->route('invoice.show', $registrant->id);
});
