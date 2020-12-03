<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_fb', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('password');
            $table->string('name');
            $table->integer('email_id');
            $table->date('date_of_birth');
            $table->integer('friend');
            $table->date('date_input');
            $table->rememberToken('access_token');
            
            $table->tinyInteger('status');
            $table->foreignId('type_id');

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
        Schema::dropIfExists('users_fb');
    }
}
