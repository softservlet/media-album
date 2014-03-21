<?php namespace Softservlet\MediaCollection\Laravel\Repo;

use Softservlet\MediaCollection\Repo\MediaObjectRepositoryInterface;
use Softservlet\MediaCollection\Laravel\ORM\MediaObjectDB;
use Softservlet\MediaCollection\Laravel\MediaObjectEloquent;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

class MediaObjectRepositoryEloquent implements MediaObjectRepositoryInterface
{

	/**
	 * @brief eloquent instance 
	 *
	 * @var MediaObjectDB
	 */
	protected $object;
	

	public function __construct(MediaObjectDB $object)
	{
		$this->object = $object;
	}
	
	/**
	 * @brief get media object by id
	 *
	 * @return array of MediaObjectInterface
	 */
	public function byId($id)
	{
		return new MediaObjectEloquent($this->object->find($id));
	}
	
	/**
	 * @brief get media objects by album id
	 *
	 * @param int album id
	 * @param int limit
	 * @param int offset
	 */
	public function byAlbumId($id, $limit = 0, $offset = 0)
	{
		$objects = array();

		$id = DB::table('collections_media_objects')
					->where('collection_id','=',$id);
		if($limit > 0) {
			$id = $id->take($limit);
		}
		if($offset > 0) {
			$id = $id->skip($offset);
		}
		
		$id = array_values($id->get('media_object_id'));
		
		if(count($id) == 0) return array();
		
		$obj = $this->object->where_in('id',$id);
		
		foreach($obj as $object) {
			$objects[] = new MediaObjectEloquent($object);
		}
		
		return $objects;
	}
	
	/**
	 * @brief create new media object
	 *
	 * @param string uri
	 *
	 * @return MediaObjectInterface instance
	 */
	public function create($uri)
	{	
		$this->object->unguard();

		$object = $this->object->create(array
		(
			'uri' => $uri
		));

		return new MediaObjectEloquent($object);
	}

}

