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

            $table->integer('user_id')->unsigned();
            $table->integer('template_id')->unsigned()->nullable();

            $table->string('subdomain', 255)->unique();
            $table->string('slogan_color', 100);
            $table->string('text_color',100);
            $table->string('primary_color', 100);
            $table->string('secondry_color', 100);
            $table->enum('body_type', ['fill', 'centered']);
            $table->string('background_image');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::drop('sites');
    }
}
