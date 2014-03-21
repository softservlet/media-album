<?php namespace Softservlet\MediaCollection\Repo;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

interface CollectionRepositoryInterface
{
	/**
	 * @brief get collections by id
	 *
	 * @param string id
	 *
	 * @return CollectionInterface collection
	 */
	public function byId($id);
	
	/**
	 * @brief return the media objects that belongs to this collection
	 * 
	 * @return Array<MediaObjectInterface>
	 */
	public function getObjects();
	
	/**
	 * @brief create a new collection
	 *
	 * @param collection name
	 *
	 * @return CollectionInterface
	 */
	public function create($name);
}	

