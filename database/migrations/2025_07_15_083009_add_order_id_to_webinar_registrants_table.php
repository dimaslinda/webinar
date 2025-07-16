<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('webinar_registrants', function (Blueprint $table) {
            $table->string('order_id')->nullable()->unique()->after('snap_token');
        });
    }
    public function down()
    {
        Schema::table('webinar_registrants', function (Blueprint $table) {
            $table->dropColumn('order_id');
        });
    }
};
