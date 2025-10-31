<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('piani', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->text('descrizione')->nullable();
            $table->decimal('costo_mensile', 8, 2)->default(0);
            $table->integer('durata_mesi')->default(12);
            $table->boolean('stato')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('piani');
    }
};
