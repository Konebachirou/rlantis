<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('contact');  
            $table->string('sexe');
            $table->string('img')->nullable();
            $table->string('cv')->nullable();
            $table->string('admin')->default('false');
            $table->string('active')->default('false');
            $table->string('location');
            $table->text('these')->nullable();
            $table->text('research_domaine')->nullable();
            $table->string('ieeexplore')->nullable();
            $table->string('researchgate')->nullable();
            $table->string('scholar')->nullable();
            $table->string('acm')->nullable();
            $table->string('dblp')->nullable();
            $table->foreignId('type')->constrained('user__types')->cascadeOnDelete();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
