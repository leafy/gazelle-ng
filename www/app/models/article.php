<?php
class Article extends AppModel {
	var $name = 'Article';
	var $displayField = 'title';
	
	var $belongsTo = array(
		"Author" => array(
			"className" => "User"
		)
	);	
}
?>