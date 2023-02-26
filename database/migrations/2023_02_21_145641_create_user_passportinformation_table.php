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
        Schema::create('user_passportinformation', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('user_id');
            $table->enum('status', ['passport', 'certificate']);
            $table->string('passportnumber');
            $table->string('passportseries');
            $table->string('pinfl')->nullable();
            $table->string('placeissue')->nullable();
            $table->string('givenby')->nullable();
            $table->date('dateissue')->nullable();
            $table->date('dateexpiration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_passportinformation');
    }
};
