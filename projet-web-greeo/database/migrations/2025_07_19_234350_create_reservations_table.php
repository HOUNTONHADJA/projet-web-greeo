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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            // Données salle
            $table->foreignId('salles_id')->constrained()->onDelete('cascade');

            // Informations client
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');

            // Détails réservation
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['pending', 'approved', 'canceled', 'completed'])->default('pending');

            // Informations de facturation
            $table->string('invoice_number')->nullable(); // numéro unique si besoin
            $table->boolean('invoice_sent')->default(false); // facture envoyée ou pas

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
