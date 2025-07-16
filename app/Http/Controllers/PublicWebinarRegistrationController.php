<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebinarRegistrant;
use App\Services\MidtransService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PublicWebinarRegistrationController extends Controller
{
    // Tampilkan form registrasi publik
    public function showForm()
    {
        return view('public-register');
    }

    // Handle submit form registrasi publik
    public function submitForm(Request $request, MidtransService $midtrans)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:webinar_registrants,email',
            'phone' => 'required|string|max:20',
            'domicile' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'business_field' => 'required|string|max:255',
            'info_source' => 'required|string|max:255',
            'income_range' => 'required|string|max:255',
            'referred_by' => 'nullable|string|size:8',
        ]);

        $registrant = DB::transaction(function () use ($data, $midtrans) {
            // Generate kode referral unik
            do {
                $referralCode = strtoupper(Str::random(8));
            } while (WebinarRegistrant::where('referral_code', $referralCode)->exists());
            $data['referral_code'] = $referralCode;

            // Logika referral
            if (!empty($data['referred_by'])) {
                $referrer = WebinarRegistrant::where('referral_code', $data['referred_by'])->first();
                if (!$referrer) {
                    $data['referred_by'] = null;
                }
            }

            // Generate invoice_token sebelum save
            $data['invoice_token'] = Str::uuid();

            $newRegistrant = new WebinarRegistrant($data);

            $price = config('services.webinar.price', 50000);
            $orderId = 'WEBINAR-' . Str::uuid();
            $params = [
                'transaction_details' => [
                    'order_id' => $orderId,
                    'gross_amount' => $price,
                ],
                'customer_details' => [
                    'first_name' => $newRegistrant->name,
                    'email' => $newRegistrant->email,
                    'phone' => $newRegistrant->phone,
                ],
                'callbacks' => [
                    'finish' => url('/invoice/' . $newRegistrant->id . '?token=' . $data['invoice_token']),
                    'unfinish' => url('/invoice/' . $newRegistrant->id . '?token=' . $data['invoice_token']),
                    'error' => url('/invoice/' . $newRegistrant->id . '?token=' . $data['invoice_token']),
                ],
            ];
            $newRegistrant->order_id = $orderId;
            $newRegistrant->snap_token = $midtrans->createSnapToken($params);
            $newRegistrant->product_name = 'Webinar Bisnis';
            $newRegistrant->product_price = $price;
            $newRegistrant->save();
            return $newRegistrant;
        });

        $url = config('services.midtrans.is_production')
            ? 'https://app.midtrans.com/snap/v2/vtweb/'
            : 'https://app.sandbox.midtrans.com/snap/v2/vtweb/';
        return redirect()->away($url . $registrant->snap_token);
    }
}
