<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('spassword')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('code');
            $table->string('phone')->nullable();
            $table->string('status')->default('pending');
            $table->float('balance')->default('0');
            $table->date('a_date')->nullable(); 
            $table->string('refer_by')->nullable();
            $table->string('verification')->nullable();
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
        Schema::dropIfExists('institutes');
    }
}
