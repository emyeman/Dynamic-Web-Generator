<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doman_name', 100);
            $table->string('color', 10);
            $table->string('primary_color', 10);
            $table->string('secondry_color', 10);
            $table->enum('body_type', ['fill', 'centered']);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sites');
    }
}
