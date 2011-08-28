<?php
	/**
	 * @file formatter.php
	 * @author leafy
	 *
	 * Format helper
	 */
	
	class FormatterHelper extends AppHelper {
		var $helpers = array("Time");
		
		/**
		 * Torrent display string ("MP3 / V0 / CD")
		 */
		function formatTorrent($torrent) {
			$parts = array(
				$torrent["Torrent"]["encoder"],
				$torrent["Torrent"]["bitrate"],
				$torrent["Torrent"]["source"]
			);
			
			return implode(" / ", $parts); 
		}
		
		/**
		 * Album display string ("Artist - Album [Year]")
		 */
		function formatAlbum($album) {
			return sprintf("%s - %s [%s]", 
				$album["Artist"]["name"], 
				$album["Album"]["title"], 
				$this->Time->format("Y", $album["Album"]["release"])
			);
		}
		
		/**
		 * Formats a file size to a friendly file size (96840000 -> "96.84 MB")
		 */
		function formatSize($bytes) {
			// Find the largest unit size
			$units = array("PB", "TB", "GB", "MB", "KB", "B");
		}
	}
?>