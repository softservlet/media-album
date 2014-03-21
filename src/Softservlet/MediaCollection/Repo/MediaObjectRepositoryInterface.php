<?php namespace Softservlet\MediaCollection\Repo;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

interface MediaObjectRepositoryInterface
{
	/**
	 * @brief get media object by id
	 *
	 * @return array of MediaObjectInterface
	 */
	public function byId($id);
	
	/**
	 * @brief get media objects by album id
	 * 
	 * @param int album id
	 * @param int limit
	 * @param int offset
	 */
	public function byAlbumId($id, $limit = 0, $offset = 0);
	
	/**
	 * @brief create new media object
	 *
	 * @param string uri
	 *
	 * @return MediaObjectInterface instance
	 */
	public function create($uri);
}
