<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')->references('id')->on('languages')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('health_id')->unsigned();
            $table->foreign('health_id')->references('id')->on('healths')->onDelete('cascade');
            $table->integer('specialty_id')->unsigned();
            $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade');
            $table->boolean('status');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->text('resume')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('slug');
            $table->text('addressCompany')->nullable();
            $table->text('nameCompany')->nullable();
            $table->text('addressHome')->nullable();
            $table->string('age')->nullable();
            $table->integer('order')->default(1);
            $table->integer('rank')->default(0);
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('doctors');
    }
}
