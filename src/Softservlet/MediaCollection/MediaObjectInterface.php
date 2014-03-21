<?php namespace Softservlet\MediaCollection;

use Softservlet\FileManager\File\FileInterface;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

interface MediaObjectInterface extends FileInterface
{
	/**
	 * @brief get the object id
	 *
	 * @return string|int id
	 */
	public function getId();

}
