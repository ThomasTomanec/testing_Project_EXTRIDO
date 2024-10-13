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
        Schema::create('produkty', function (Blueprint $table) {
            $table->id(); 
            $table->string('nazev')->unique(); 
            $table->foreignId('znacky_id')->constrained('znacky')->onDelete('cascade'); 
            $table->foreignId('materialy_id')->constrained('materialy')->onDelete('cascade');
            $table->string('kod')->unique(); 
            $table->decimal('cena', 10, 2); 
            $table->text('description'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkty');
    }
};
