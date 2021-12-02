<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertMobils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('mobils')->insert(
            array(
                [
                    'name' => 'Car1',
                    'type' => 'Type1',
                ],
                [
                    'name' => 'Car2',
                    'type' => 'Type1',
                ],
                [
                    'name' => 'Car3',
                    'type' => 'Type1',
                ],
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
