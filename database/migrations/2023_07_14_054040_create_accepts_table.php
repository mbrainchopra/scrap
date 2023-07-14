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
        Schema::create('accepts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('demail');
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->string('product_type');
            $table->string('quantity');
            $table->string('price');
            $table->string('status');
            $table->string('pstatus');
            $table->string('lang');
            $table->string('latt');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepts');
    }
};
