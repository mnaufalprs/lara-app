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
        Schema::create('data_wbtests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('input_wbtest_id');
            $table->foreignId('user_id');
            $table->string('server_address');
            $table->float('time_taken');
            $table->float('request_second');
            $table->float('time_request');
            $table->float('transfer_rate');
            $table->float('connection_time');
            $table->integer('request_loss');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_wbtests');
    }
};
