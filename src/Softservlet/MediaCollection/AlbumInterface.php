<?php namespace Softservlet\MediaCollection;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */
interface AlbumInterface
{
	/**
	 * @brief get the album name
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * @brief get the album id
	 *
	 * @return int|string album id
	 */
	public function getId();

	/**
	 * @brief add a new media object to album
	 *
	 * @param MediaObjectInterface
	 * 
	 * @return void
	 */
	public function addObject(MediaObjectInterface $object);

	/**
	 * @brif get all media objects that belongs to this album
	 * 
	 * @return Array<MediaObjectInterface>
	 */
	public function getObjects();
}

