<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image');
            $table->string('address')->nullable();
            $table->string('fb');
            $table->string('type')->nullable();
            $table->string('time')->nullable();
            $table->text('description')->nullable();
            $table->string('code');
            $table->string('phone')->nullable();
            $table->date('a_date')->nullable();
            $table->string('status')->default('pending');
            $table->float('balance')->default('0');
            $table->string('verification')->nullable();   
            $table->string('refer_by')->nullable();            
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
        Schema::dropIfExists('services');
    }
}
