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
        Schema::create('Import', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('FurnitureId'); // Must match the PK name in Furniture
            $table->date('ImportDate');
            $table->integer('Quantity');
            $table->timestamps();
        
            $table->foreign('FurnitureId')->references('FurnitureId')->on('Furniture')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Import');
    }
};
