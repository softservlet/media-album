<?php 

class AlbumRepositoryTest extends TestCase 
{

	public function testCreateAlbum()
	{
		$album = Album::create('My Album');

		$album2 = Album::byId($album->getId());

		$this->assertEquals($album->getId(), $album2->getId());
		$this->assertEquals($album->getName(), $album2->getName());
	}
}
