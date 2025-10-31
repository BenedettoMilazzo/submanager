<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pagamenti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_utente')->constrained('utenti')->onDelete('cascade');
            $table->enum('metodo', ['paypal','stripe','visa','mastercard']);
            $table->decimal('importo', 8, 2);
            $table->enum('stato', ['in_attesa','completato','fallito'])->default('in_attesa');
            $table->timestamp('data_pagamento')->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pagamenti');
    }
};
