<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();

            $table->string('company_name',100)->nullable();
            $table->string('ar_company_name',100)->nullable();

            $table->string('slogan',255)->nullable();
            $table->string('ar_slogan',255)->nullable();

            $table->string('logo',255)->nullable();
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
        Schema::drop('headers');
    }
}
