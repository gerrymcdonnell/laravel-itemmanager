<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('text');
            $table->string('body');

            $table->timestamps();
        });

        //insert
        $this->insertDefaultData();
    }


    public function insertDefaultData(){
        //setup default data
        $rows = [
            [
                'text'=>'first listing',
                'body'=>'blah blah bah1',
                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ],
            [
                'text'=>'2first listing',
                'body'=>'2blah blah bah',
                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ]
        ];
        // insert records
        DB::table('items')->insert($rows);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
