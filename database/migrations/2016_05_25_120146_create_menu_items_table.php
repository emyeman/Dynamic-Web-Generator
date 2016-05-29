<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->timestamps();
            $table->integer('menu_item_id')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->foreign('id')
                  ->references('id')
                  ->on('pages')
                  ->onDelete('cascade');
            $table->foreign('menu_item_id')
                  ->references('id')
                  ->on('menu_items')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_items');
    }
}
