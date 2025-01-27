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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->unsignedBigInteger('bien_conserner')->nullable(); // Clé étrangère nullable
            $table->string('tel_emetteur');
            $table->string('email_emetteur');
            $table->string('prenom_emetteur');
            $table->string('nom_emetteur');
            $table->text('contenu_message');
            $table->timestamps();

            // Définition de la clé étrangère
            $table->foreign('bien_conserner')
                  ->references('id')
                  ->on('proprietes') // Table référencée
                  ->onDelete('set null'); // Si la propriété est supprimée, définir la valeur à NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
