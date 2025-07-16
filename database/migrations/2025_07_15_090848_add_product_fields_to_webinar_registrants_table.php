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
            $table->string('product_name')->nullable()->after('order_id');
            $table->integer('product_price')->nullable()->after('product_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webinar_registrants', function (Blueprint $table) {
            $table->dropColumn(['product_name', 'product_price']);
        });
    }
};
