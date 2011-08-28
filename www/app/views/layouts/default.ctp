<?php
	/**
	 * @file default.ctp
	 * @author leafy
	 * 
	 * Default layout
	 */
	
?>
<!doctype html>
<html>
	<head>
		<title><?php echo $title_for_layout; ?> :: gazelle-ng</title>
		<link rel="stylesheet/less" type="text/css" href="css/layer_cake.less" />
		<?php
			echo $this->Html->charset();
			echo $this->Html->css(array("reset"));
			echo $this->Html->script("less", array("inline" => true)); 
		?>
		
	</head>
	
	<body>
		<div id="container">
			
			<div class="head">
				<?php 
					echo $this->element("logo");
					echo $this->element("navigation"); 
					echo $this->element("user_info");
					echo $this->element("breadcrumb");
				?>
			</div>
			<div class="body">
				<?php echo $content_for_layout; ?>
			</div>
			<div class="footer">
				<p>
					
				</p>
			</div>
			
		</div>
	</body>
</html>