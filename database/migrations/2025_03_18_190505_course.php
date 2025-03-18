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
        Schema::create('course', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('price');
            $table->text('time');
            $table->boolean('is_promo');
            $table->boolean('is_new');
            $table->boolean('is_popular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
