<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('abbonamenti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_utente')->constrained('utenti')->onDelete('cascade');
            $table->foreignId('id_piano')->constrained('piani')->onDelete('cascade');
            $table->foreignId('id_pagamento')->nullable()->constrained('pagamenti')->onDelete('set null');
            $table->date('data_attivazione')->nullable();
            $table->date('data_scadenza')->nullable();
            $table->enum('stato', ['attivo','scaduto','sospeso'])->default('attivo');
        });
    }

    public function down(): void {
        Schema::dropIfExists('abbonamenti');
    }
};
