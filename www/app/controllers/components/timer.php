<?php
	/**
	 * @file timer.php
	 * @author leafy
	 */
	
	class TimerComponent extends Object {
		
		var $_timers = array();
		var $_isRunning = array();
		
		function __construct() {}
		
		function start($k) {
			$start_time = microtime(true);
			$this->_timers[$k] = $start_time;
			$this->_isRunning[$k] = true;
		}
		function end($k) {
			$end_time = microtime(true);
			if(isset($this->_timers[$k]) && true == $this->_isRunning[$k]) {
				$start_time = $this->_timers[$k];
				
				$duration = $end_time - $start_time;
				
				$this->_timers[$k] = $duration
				$this->_isRunning[$k] = false;
				
				return $duration;
			}
		}
		function get($k) {
			if(isset($this->_timers[$k])) {
				if(true == $this->_isRunning[$k]) {
					$now = microtime(true);
					$start_time = $this->_timers[$k];
					$duration = $now - $start_time;
					return $duration;
				}
				else {
					return $this->_timers[$k];
				}
			}
		}
	}
?>