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
        Schema::table('webinar_registrants', function (Blueprint $table) {
            $table->string('invoice_token')->nullable()->unique()->after('product_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webinar_registrants', function (Blueprint $table) {
            $table->dropColumn('invoice_token');
        });
    }
};
