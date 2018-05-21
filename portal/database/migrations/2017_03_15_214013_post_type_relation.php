<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostTypeRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		// Schema::create('type_post', function (Blueprint $table) {
		// 	$table->increments('id');
		// 	$table->integer('post_id');
		// 	$table->string('type_id');
		// });
	
		// 	Schema::table ( 'posts', function (Blueprint $table) {
		// 		$table->timestamps();
		// 	} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table ( 'posts', function (Blueprint $table) {
		// 	$table->dropColumn ( 'date' );
		// } );
	}
	}
