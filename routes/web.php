<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicWebinarRegistrationController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('index');
});

// Route form registrasi webinar publik
Route::get('/daftar', [PublicWebinarRegistrationController::class, 'showForm']);
Route::post('/daftar', [PublicWebinarRegistrationController::class, 'submitForm']);

// Route invoice pembayaran
Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoice/{id}/download', [InvoiceController::class, 'download'])->name('invoice.download');

Route::get('/invoice', function (\Illuminate\Http\Request $request) {
    $orderId = $request->query('order_id');
    if (!$orderId) {
        abort(404);
    }
    $registrant = \App\Models\WebinarRegistrant::where('order_id', $orderId)->firstOrFail();
    return redirect()->route('invoice.show', $registrant->id);
});

Route::get('/invoice/{id}/download', function (\Illuminate\Http\Request $request, $id) {
    $registrant = \App\Models\WebinarRegistrant::findOrFail($id);
    return redirect()->route('invoice.download', $registrant->id);
});
