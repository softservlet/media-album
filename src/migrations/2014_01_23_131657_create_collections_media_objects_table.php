<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsMediaObjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collections_media_objects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('collection_id')->unsigned();
			$table->integer('media_object_id')->unsigned();

			$table->index('collection_id');
			$table->index('media_object_id');
			$table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
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
		Schema::table('collections_media_objects', function(Blueprint $table)
		{
			$table->dropForeign('collections_media_objects_collection_id_foreign');
			$table->dropForeign('collections_media_objects_media_object_id_foreign');
		});

		Schema::drop('collections_media_objects');
	}

}
