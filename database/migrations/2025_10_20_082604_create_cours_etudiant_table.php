<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('cours_etudiant', function (Blueprint $table) {
        $table->id();
        $table->foreignId('etudiant_id')->constrained('etudiant')->onDelete('cascade');
        $table->foreignId('cours_id')->constrained('cours')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_etudiant');
    }
};
