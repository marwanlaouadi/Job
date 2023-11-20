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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobs_id'); 
            $table->unsignedBigInteger('job_seekers_id'); 
            $table->unsignedBigInteger('user_id'); 
            $table->enum('type', ['Online', 'In Person']); 
            $table->dateTime('interview_datetime'); 
            $table->unsignedInteger('duration_minutes')->nullable(); 
            $table->string('zoom_address')->nullable(); 
            $table->string('location')->nullable(); 
            $table->enum('status', ['Scheduled', 'Completed', 'Canceled']); 
            $table->text('interview_notes')->nullable(); 
            $table->timestamps();
    
           
            
            $table->foreign('jobs_id')->references('id')->on('jobs');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
