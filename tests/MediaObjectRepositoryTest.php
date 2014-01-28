<?php 

class MediaObjectRepositoryTest extends TestCase
{
	public function testCreate()
	{
		$media = MediaObject::create('/path/to/file');

		$media2 = MediaObject::byId($media->getId());

		$this->assertEquals($media->getId(), $media2->getId());
		$this->assertEquals($media->uri(), $media2->uri());
	}

	public function testAssignToAlbum()
	{
		$album = Album::create('My temporary album name');
		$media = MediaObject::create('path/to');
		
		$album->addObject($media);

		foreach($album->getObjects() as $object) {
			$this->assertEquals($media->getId(), $object->getId());
			$this->assertEquals($media->uri(), $object->uri());
		}
	}
}
