<?php namespace Softservlet\MediaCollection\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class MediaObject extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'Softservlet\MediaCollection\Repo\MediaObjectRepositoryInterface';
	}
}
