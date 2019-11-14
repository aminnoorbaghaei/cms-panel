<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

   

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')->references('id')->on('languages')->onDelete('cascade');
            $table->boolean('status');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('price')->default('0');
            $table->text('api_token');
            $table->text('resume')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->text('addressCompany')->nullable();
            $table->text('nameCompany')->nullable();
            $table->text('addressHome')->nullable();
            $table->string('age')->nullable();
            $table->integer('order')->default(1);
            $table->integer('rank')->default(0);
            $table->string('email')->unique();
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
}
