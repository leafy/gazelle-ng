<?php
	/**
	 * @file markdown.php
	 * @author leafy
	 *
	 * Markdown PHP wrapper
	 */
	
	require_once dirname(ROOT) . "/markdown/markdown.php";
	class MarkdownHelper extends AppHelper {
		function render($txt) {
			return Markdown($txt);
		}
	}
?>