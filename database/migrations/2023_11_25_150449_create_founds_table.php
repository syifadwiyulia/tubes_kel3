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
        Schema::create('founds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('photo');
            $table->string('items', 100);
            $table->date('date_found');
            $table->dateTime('time_found', $precision = 0);
            $table->text('description');
            $table->string('category', 100);
            $table->string('brand', 200);
            $table->string('where_found', 200);
            $table->string('detail_loc', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('founds');
    }
};
