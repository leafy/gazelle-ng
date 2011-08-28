<?php
	class Artist extends AppModel {
		var $name = "Artist";
		var $hasMany = "Album";
	}
?>