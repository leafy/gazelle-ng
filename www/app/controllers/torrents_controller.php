<?php
class TorrentsController extends AppController {

	var $name = 'Torrents';
	
	function index() {
		$this->helpers[] = "Time";
		$this->helpers[] = "Formatter";
		
		$torrents = $this->Torrent->find("all");
		$albums = array();
		
		foreach($torrents as $torrent) {
			$album_id = $torrent["Album"]["id"];
			$artist_id = $torrent["Artist"]["id"];
			
			if(!isset($albums[$album_id]))
				$albums[$album_id] = array("torrents" => array(), "album" => array("Artist" => $torrent["Artist"], "Album" => $torrent["Album"]));
			
			$albums[$album_id]["torrents"][] = $torrent;
		}
		$this->set("torrents", $torrents);
		$this->set("albums", $albums);
	}
}
?>