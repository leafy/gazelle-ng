<?php
class ArticlesController extends AppController {

	var $name = 'Articles';
	
	function index() {
		$this->helpers[] = "Time";
		$this->helpers[] = "Markdown";
		
		// Grab the last month's news
		$this->Article->category = "news";
		
		$news = $this->Article->find("all");
		$this->set("news", $news);
	}

}
?>