<?php namespace Softservlet\MediaAlbum\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Album extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'Softservlet\MediaAlbum\Repo\AlbumRepositoryInterface';
	}
}
