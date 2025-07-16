<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebinarRegistrant;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    // Tampilkan halaman invoice pembayaran
    public function show($id, $token)
    {
        $registrant = WebinarRegistrant::findOrFail($id);
        if ($registrant->invoice_token !== $token) {
            abort(403, 'Akses invoice tidak valid.');
        }
        return view('invoice', compact('registrant'));
    }

    // Download invoice sebagai PDF
    public function download($id, $token)
    {
        $registrant = WebinarRegistrant::findOrFail($id);
        if ($registrant->invoice_token !== $token) {
            abort(403, 'Akses invoice tidak valid.');
        }
        $pdf = Pdf::loadView('invoice-pdf', compact('registrant'));
        return $pdf->download('invoice-webinar-' . $registrant->id . '.pdf');
    }
}
