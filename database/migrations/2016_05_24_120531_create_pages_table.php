<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200)->unique();
            $table->string('content',1000);
            $table->string('path',200);
            $table->string('image',200)->nullable();
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
        Schema::drop('pages');
    }
}
