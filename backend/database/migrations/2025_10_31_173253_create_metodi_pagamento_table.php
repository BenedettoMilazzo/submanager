<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('metodi_pagamento', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['paypal','stripe','visa','mastercard']);
            $table->string('api_key', 255);
            $table->string('secret_key', 255)->nullable();
            $table->boolean('stato')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('metodi_pagamento');
    }
};
