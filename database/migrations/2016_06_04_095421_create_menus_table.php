<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();
            $table->string('title');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('route')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('site_id')
                ->references('id')
                ->on('sites')
                ->onUpdate('cascade');
            $table->foreign('parent_id')
                ->references('id')
                ->on('menus')
                ->onUpdate('cascade');
            $table->foreign('route')
                ->references('id')
                ->on('pages')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
