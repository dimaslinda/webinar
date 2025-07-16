<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('webinar_registrants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('domicile');
            $table->string('company_name')->nullable();
            $table->string('business_field');
            $table->string('info_source');
            $table->string('income_range');
            $table->string('referral_code')->unique();
            $table->string('referred_by')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->decimal('cashback', 12, 2)->default(0);
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinar_registrants');
    }
};
