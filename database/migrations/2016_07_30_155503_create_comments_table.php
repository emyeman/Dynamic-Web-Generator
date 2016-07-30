<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->text('comment');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')
                  ->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('ticket_id')
                  ->references('id')->on('tickets')->onUpdate('cascade'); 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
