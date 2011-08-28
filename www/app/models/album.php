<?php
	class Album extends AppModel {
		var $name = "Album";
		var $belongsTo = "Artist";
		var $hasMany = "Torrent";
	}
?>