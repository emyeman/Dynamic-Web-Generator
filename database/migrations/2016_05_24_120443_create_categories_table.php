<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200)->unique();
            $table->string('description',1000)->nullable();
            $table->string('image',200)->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('site_id')->unsigned();
            $table->integer('category_id')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->foreign('site_id')
                  ->references('id')
                  ->on('sites');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
