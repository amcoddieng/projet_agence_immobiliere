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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('pieces');
            $table->text('type');
            $table->integer('salon');
            $table->longText('description');
            $table->integer('prix');
            $table->text('cycle');
            $table->text('region');
            $table->text('departement');
            $table->text('ville');
            $table->text('adresse');
            $table->boolean('disponible')->default(true);
            $table->json('images')->nullable();
            $table->unsignedBigInteger('personne_id'); // Ajout de la clé étrangère
            $table->timestamps();

            // Définir la clé étrangère
            $table->foreign('personne_id')
                ->references('id')
                ->on('personnes')
                ->onDelete('cascade'); // Supprime les propriétés si la personne est supprimée
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};
