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
        Schema::create('input_wbtests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('server_address');
            $table->decimal('request_count');
            $table->decimal('connection_count');
            $table->string('category_server')->nullable();
            $table->string('algortima_LB')->nullable();

        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('server_address')->nullable();
        //     $table->decimal('request_count')->nullable();
        //     $table->decimal('connection_count')->nullable();
        //     $table->string('category_server')->nullable();
        //     $table->string('algortima_LB')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_wbtests');
    }
};
