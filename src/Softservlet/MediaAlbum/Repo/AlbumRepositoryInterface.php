<?php namespace Softservlet\MediaAlbum\Repo;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

interface AlbumRepositoryInterface
{
	/**
	 * @brief get albums by id
	 *
	 * @param string id
	 *
	 * @return AlbumInterface album
	 */
	public function byId($id);

	/**
	 * @brief create a new album
	 *
	 * @param album name
	 *
	 * @return AlbumInterface
	 */
	public function create($name);
}	

