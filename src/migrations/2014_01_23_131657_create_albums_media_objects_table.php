<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsMediaObjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums_media_objects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('album_id')->unsigned();
			$table->integer('media_object_id')->unsigned();

			$table->index('album_id');
			$table->index('media_object_id');
			$table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
			$table->foreign('media_object_id')->references('id')->on('media_objects')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('albums_media_objects', function(Blueprint $table)
		{
			$table->dropForeign('albums_media_objects_album_id_foreign');
			$table->dropForeign('albums_media_objects_media_object_id_foreign');
		});

		Schema::drop('albums_media_objects');
	}

}
