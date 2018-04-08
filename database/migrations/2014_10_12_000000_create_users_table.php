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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('facebook_id');
            $table->string('anonymous')->default('1');
            $table->text('points');
            $table->string('avatar')->nullable();
            $table->text('likes')->nullable();
            $table->text('dislikes')->nullable();
            $table->string('password');

            $table->text('angry')->nullable();
             $table->text('haha')->nullable();
              $table->text('like')->nullable();
               $table->text('love')->nullable();
                $table->text('sad')->nullable();
                 $table->text('wow')->nullable();
                  $table->text('yay')->nullable();
                   $table->string('emotion_result')->default('1');
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
