<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('site_id');
            $table->text('description');
            $table->string('image',200);
            $table->timestamps();
            $table->foreign('site_id')
                  ->references('id')->on('sites')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aboutuses');
    }
}
