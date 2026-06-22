<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();         // e.g. "spbu", "mai"
            $table->string('country', 5);             // "RU", "IN"
            $table->string('abbr', 10);               // "SP", "MA"
            $table->string('name');
            $table->string('url');                    // relative URL
            $table->string('url_label');              // display URL
            $table->string('logo');
            $table->unsignedSmallInteger('founded');
            $table->string('location');
            $table->string('email');
            $table->string('phone');
            $table->text('desc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
