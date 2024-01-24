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
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('vehiculo_id');
            $table->integer('old_user_id');
            $table->integer('new_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicos');
    }
};
