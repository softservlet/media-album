<?php namespace Softservlet\MediaCollection\Laravel;

use Softservlet\MediaCollection\MediaObjectInterface;
use Softservlet\MediaCollection\AlbumInterface;
use Softservlet\MediaCollection\Laravel\ORM\AlbumDB;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class AlbumEloquent implements AlbumInterface
{
	/**
	 * @brief AlbumDB instance
	 *
	 * @var AlbumDB
	 */
	protected $orm;
	
	
	public function __construct(AlbumDB $orm)
	{
		$this->orm = $orm;
	}	

	/**
	 * @brief get the album name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->orm->name;
	}	

	/**
	 * @brief get the album id
	 *
	 * @return int|string album id
	 */
	public function getId()
	{
		return $this->orm->id;
	}

	/**
	 * @brief add a new media object to album
	 *
	 * @param MediaObjectInterface
	 * 
	 * @return the added object
	 */
	public function addObject(MediaObjectInterface $object)
	{
		$this->orm->objects()->attach($object->getId());

		return $object;
	}	

	/**
	 * @brif get all media objects that belongs to this album
	 * 
	 * @return Array<MediaObjectInterface>
	 */
	public function getObjects()
	{
		$obj = array();

		foreach($this->orm->objects as $object) {
			$obj[] = new MediaObjectEloquent($object);
		}	

		return $obj;
	}
}

