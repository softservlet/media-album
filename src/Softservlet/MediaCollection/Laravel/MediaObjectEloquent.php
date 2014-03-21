<?php namespace Softservlet\MediaCollection\Laravel;

use Softservlet\MediaCollection\MediaObjectInterface;
use Softservlet\MediaCollection\Laravel\ORM\MediaObjectDB;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class MediaObjectEloquent implements MediaObjectInterface
{
	/**
	 * @brief eloquent instance
	 *
	 * @var MediaObjectDB
	 */
	protected $orm;


	public function __construct(MediaObjectDB $orm)
	{
		$this->orm = $orm;
	}

	/**
	 * @brief get the object id
	 *
	 * @return string|int id
	 */
	public function getId()
	{
		return $this->orm->id;
	}

	/**
	 * @brief get the object uri
	 *
	 * @return string uri
	 */
	public function uri()
	{
		return $this->orm->uri;	
	}

}

