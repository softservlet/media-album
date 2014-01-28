<?php namespace Softservlet\MediaAlbum\Laravel\Repo;

use Softservlet\MediaAlbum\Repo\MediaObjectRepositoryInterface;
use Softservlet\MediaAlbum\Laravel\ORM\MediaObjectDB;
use Softservlet\MediaAlbum\Laravel\MediaObjectEloquent;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class MediaObjectRepositoryEloquent implements MediaObjectRepositoryInterface
{

	/**
	 * @brief eloquent instance 
	 *
	 * @var MediaObjectDB
	 */
	protected $object;
	

	public function __construct(MediaObjectDB $object)
	{
		$this->object = $object;
	}
	
	/**
	 * @brief get media object by id
	 *
	 * @return array of MediaObjectInterface
	 */
	public function byId($id)
	{
		return new MediaObjectEloquent($this->object->find($id));
	}

	/**
	 * @brief create new media object
	 *
	 * @param string uri
	 *
	 * @return MediaObjectInterface instance
	 */
	public function create($uri)
	{	
		$this->object->unguard();

		$object = $this->object->create(array
		(
			'uri' => $uri
		));

		return new MediaObjectEloquent($object);
	}

}

