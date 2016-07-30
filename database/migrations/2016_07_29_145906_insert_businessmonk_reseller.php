<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertBusinessmonkReseller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert(
            array(
                'name' => 'BusinessMonk',
                'email' => 'BusinessMonk@gmail.com',
                'mobile' => '01017149336',
                'password' => bcrypt('1234567'),
                'image' => '/default.jpg',
                'status' => 'reseller',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
