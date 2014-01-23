<?php namespace Softservlet\MediaAlbum\Laravel\ORM;

use Illuminate\Database\Eloquent\Model;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class AlbumDB extends Model
{
	//database table
	protected $table = 'albums';

	//unguard all
	protected $guarded = array();

	//relationship to objects
	public function objects()
	{
		return $this->belongsToMany('Softservlet\MediaAlbum\Laravel\ORM\MediaObject');
	}
}

