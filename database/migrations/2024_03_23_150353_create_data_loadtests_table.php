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
        Schema::create('data_loadtests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->foreignId('input_livetest_id');
            $table->string('server_address');
            $table->decimal('request_count');
            $table->decimal('connection_count');
            $table->float('time_taken');
            $table->float('request_second');
            $table->float('time_request');
            $table->float('transfer_rate');
            $table->float('connection_time');
            $table->integer('request_loss');
            $table->string('algortima_LB')->nullable();
            $table->string('field_chart')->nullable();
            $table->integer('urutan_pengukuran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_loadtests');
    }
};
