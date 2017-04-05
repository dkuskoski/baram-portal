<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class UpdateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table ( 'users', function (Blueprint $table) {
			$table->string ( 'f_name' );
			$table->string ( 'l_name' );
			$table->string ( 'username' )->unique ();
			$table->integer ( 'level' )->default ( 99 );
			$table->integer ( 'status' )->default ( - 99 );
			$table->text ( 'about' )->nullable ();
			$table->text ( 'image' )->default ( '/user.png' );
			$table->date ( 'suspension' )->nullable ();
		} );
		
		Schema::create ( 'posts', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->text ( 'title' );
			$table->text ( 'content' );
			$table->integer ( 'type_id' );
			$table->timestamp( 'date' );
			$table->integer ( 'views' )->default ( 0 );
			$table->integer ( 'author_id' );
			$table->string ( 'section' );
			$table->integer ( 'status' )->default ( 0 );
			$table->text ( 'path' )->nullable ();;
		} );
		
		Schema::create ( 'post_types', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->integer ( 'status' );
			$table->string ( 'type' );
		} );
		
		Schema::create ( 'comments', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->timestamp ( 'date' );
			$table->integer ( 'status' );
			$table->integer ( 'post_id' );
			$table->text ( 'content' );
			$table->integer ( 'author_id' );
		} );
		
		Schema::create ( 'user_activations', function (Blueprint $table) {
			$table->integer ( 'user_id' )->unsigned ();
			$table->string ( 'token' )->index ();
			$table->timestamp ( 'created_at' );
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table ( 'users', function (Blueprint $table) {
			$table->dropColumn ( 'name' );
		} );
	}
}
