<?php namespace Softservlet\MediaCollection\Laravel\ORM;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class CollectionDB extends Model 
{
	//database table
	protected $table = 'collections';

	//unguard all
	protected $guarded = array();

	//relationship to objects
	public function objects()
	{
		return $this->belongsToMany('Softservlet\MediaCollection\Laravel\ORM\MediaObjectDB','collections_media_objects','collection_id','media_object_id');
	}
}

