<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('email');
            $table->text('number');
            $table->string('cnic');
            $table->string('professional');
            $table->string('image');
            $table->string('address');
            $table->text('social')->nullable();
            $table->string('url_fb')->nullable();
            $table->text('url_linkedin')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('qualification');
            $table->date('p_date')->nullable();
            $table->date('a_date')->nullable();
            $table->string('job_title')->nullable();
            $table->string('status')->default('Unhired');
            $table->string('profile')->default('Not Approved');
            $table->text('job_description')->nullable();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
