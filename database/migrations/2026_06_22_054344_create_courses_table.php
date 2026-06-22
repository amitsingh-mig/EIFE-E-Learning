<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();         // e.g. "spbu-py-prog"
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->string('univ_name');
            $table->string('univ_logo');
            $table->string('title');
            $table->string('thumbnail');
            $table->string('category');
            $table->string('sub_subject');
            $table->string('language', 50);
            $table->string('type');                   // "Free Audit", "Verified Certificate", etc.
            $table->string('status', 20);             // "Active", "Upcoming", "Ended"
            $table->date('start_date');
            $table->date('end_date');
            $table->text('desc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
