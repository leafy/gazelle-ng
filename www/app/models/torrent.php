<?php
class Torrent extends AppModel {
	var $name = 'Torrent';
	var $belongsTo = array("Artist", "Album");
}
?>