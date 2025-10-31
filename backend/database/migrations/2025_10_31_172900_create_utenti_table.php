<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('utenti', function (Blueprint $table) {
            $table->id();
            $table->string('nominativo', 100);
            $table->string('indirizzo', 255)->nullable();
            $table->string('comune', 100)->nullable();
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('telefono', 20)->nullable();
            $table->enum('ruolo', ['super_admin','segreteria','user','ditta','call_center','autista'])->default('user');
            $table->boolean('stato')->default(true);
            $table->timestamp('data_inserimento')->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('utenti');
    }
};
