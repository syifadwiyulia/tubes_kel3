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
        Schema::create('losts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('photo');
            $table->string('items', 100);
            $table->datetime('date_lost', $precision = 0);
            $table->text('description');
            $table->enum('category',['Clothing','Electronics','Personal Items','Documents and Identifications','Other Personal Items','Vehicles']);
            $table->string('brand', 200);
            $table->string('contact', 15);
            $table->enum('where_found', ['Selaru Building (FIT)','Manterawu Building (FEB)','Sebatik Building (FIK)','Tokong Nanas Building','FIT Building Parking','Open Library','Syamsul Ulum Mosque']);
            $table->string('detail_loc', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('losts');
    }
};
