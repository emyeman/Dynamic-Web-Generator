<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();
            $table->string('title',300);
            $table->string('description',2000);
            $table->string('image',200);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('type', ['news', 'promotion']);
            $table->softDeletes();
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
        Schema::drop('news_promotions');
    }
}
