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
        Schema::create('input_livetests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
            $table->string('server_address');
            $table->decimal('request_count');
            $table->decimal('connection_count');
            $table->string('category_server')->nullable();
            $table->string('algortima_LB')->nullable();
            $table->integer('status_connect')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_livetests');
    }
};
