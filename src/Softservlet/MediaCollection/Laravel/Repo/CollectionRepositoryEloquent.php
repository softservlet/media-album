<?php namespace Softservlet\MediaCollection\Laravel\Repo;

use Softservlet\MediaCollection\Repo\CollectionRepositoryInterface;
use Softservlet\MediaCollection\Laravel\ORM\CollectionDB;
use Softservlet\MediaCollection\Laravel\CollectionEloquent;


/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class CollectionRepositoryEloquent implements CollectionRepositoryInterface
{
	/**
	 * @brief eloquent object
	 *
	 * @var CollectionDB
	 */
	protected $collection;


	public function __construct(CollectionDB $collection)
	{
			$this->collection = $collection;	
	}	

	/**
	 * @brief get collections by id
	 *
	 * @param string id
	 *
	 * @return CollectionInterface collection
	 */
	public function byId($id)
	{		
		return new CollectionEloquent($this->collection->find($id));	
	}

	/**
	 * @brief create a new collection
	 *
	 * @param collection name
	 *
	 * @return CollectionInterface
	 */
	public function create($name)
	{
		$this->collection->unguard();

		$collection = $this->collection->create(array(
			'name' => $name	
		));

		return new CollectionEloquent($collection);
	}

}
