<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrusalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crusals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iamge',200);
            $table->string('title',150)->nullable();
            $table->string('description',300)->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('site_id')->unsigned();
            $table->foreign('site_id')
                  ->references('id')->on('sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('crusals');
    }
}
