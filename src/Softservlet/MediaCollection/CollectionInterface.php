<?php namespace Softservlet\MediaCollection;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */
interface CollectionInterface
{
	/**
	 * @brief get the collection name
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * @brief get the collection id
	 *
	 * @return int|string collection id
	 */
	public function getId();

	/**
	 * @brief add a new media object to collection
	 *
	 * @param MediaObjectInterface
	 * 
	 * @return void
	 */
	public function addObject(MediaObjectInterface $object);

	/**
	 * @brif get all media objects that belongs to this collection
	 * 
	 * @return Array<MediaObjectInterface>
	 */
	public function getObjects();
}

