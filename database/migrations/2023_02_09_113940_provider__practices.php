<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProviderPractices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider__practices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('practice_id')->unsigned(); 
            $table->foreign('practice_id')->references('id')->on('practices'); 
            $table->integer('admin_id')->unsigned(); 
            $table->foreign('admin_id')->references('id')->on('admins'); 
            $table->date('start');
            $table->date('end');
           
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
    }
}
