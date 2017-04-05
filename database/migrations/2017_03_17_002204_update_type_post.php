<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTypePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('type_post', function (Blueprint $table) {
    		$table->increments('id');
    		$table->bigInteger('post_id');
    		$table->bigInteger('type_id');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	
    	Schema::table('type_post', function (Blueprint $table) {
    		$table->drop('type_id');
    	});
    }
}
