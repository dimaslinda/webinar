<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebinarRegistrant extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'domicile',
        'company_name',
        'business_field',
        'info_source',
        'income_range',
        'referral_code',
        'referred_by',
        'is_paid',
        'cashback',
        'snap_token',
        'order_id',
        'product_name',
        'product_price',
        'invoice_token',
    ];

    // Relasi: daftar downline (peserta yang mendaftar dengan kode referral milik peserta ini)
    public function downlines()
    {
        return $this->hasMany(self::class, 'referred_by', 'referral_code');
    }
}
