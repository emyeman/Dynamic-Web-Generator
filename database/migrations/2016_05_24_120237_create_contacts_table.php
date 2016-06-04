<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();
            $table->string('address',300)->nullable();
            $table->float('lat',11.8)->nullable();
            $table->float('lng',11.8)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('mobile',100)->nullable();
            $table->string('email',130)->nullable();
            $table->string('fax',100)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('youtube',100)->nullable();
            $table->string('google_plus',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('linkedin',100)->nullable();
            $table->string('pinterest',100)->nullable();
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
        Schema::drop('contacts');
    }
}
