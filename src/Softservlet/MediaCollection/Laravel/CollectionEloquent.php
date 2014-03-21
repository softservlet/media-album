<?php namespace Softservlet\MediaCollection\Laravel;

use Softservlet\MediaCollection\MediaObjectInterface;
use Softservlet\MediaCollection\CollectionInterface;
use Softservlet\MediaCollection\Laravel\ORM\CollectionDB;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class CollectionEloquent implements CollectionInterface
{
	/**
	 * @brief CollectionDB instance
	 *
	 * @var CollectionDB
	 */
	protected $orm;
	
	
	public function __construct(CollectionDB $orm)
	{
		$this->orm = $orm;
	}	

	/**
	 * @brief get the collection name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->orm->name;
	}	

	/**
	 * @brief get the collection id
	 *
	 * @return int|string collection id
	 */
	public function getId()
	{
		return $this->orm->id;
	}

	/**
	 * @brief add a new media object to collection
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
	 * @brif get all media objects that belongs to this collection
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

