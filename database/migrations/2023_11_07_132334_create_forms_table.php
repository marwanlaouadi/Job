<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('questions');
            $table->char('cv_path', 255); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
