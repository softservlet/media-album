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
	 * @brief create a new collection
	 *
	 * @param collection name
	 *
	 * @return CollectionInterface
	 */
	public function create($name);
}	

