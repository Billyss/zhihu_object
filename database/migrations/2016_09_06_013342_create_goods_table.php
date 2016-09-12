<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goods',function(Blueprint $table){
            $table->increments('gid');
            $table->string('gname',50);
            $table->integer('tid')->unsigned();
            $table->decimal('price',6,2);
            $table->integer('cnt');
            $table->integer('scnt')->unsigned();
            $table->integer('vcnt')->unsigned();
            $table->string('gpic',100);
            $table->text('gdesc');
            $table->integer('status')->unsigned();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('goods');
    }
}
