<div class="center">
	<div class="news">
	<?php
		foreach($news as $article):
	?>
		<div class="item">
			<div class="title">
				<strong><?php echo $article["Article"]["title"]; ?></strong>
				<span><?php 
					echo $this->Time->timeAgoInWords($article["Article"]["date"]); 
					if(null != $article["Author"]["name"]) {
						// Author removed for system posts
						echo " by " . $this->Html->link($article["Author"]["name"], "/users/view/leafy"); 
					}
				?></span>
			</div>
			<div class="body">
				<?php echo $this->Markdown->render($article["Article"]["body"]); ?>
			</div>
		</div>
	<?php
		endforeach;
	?>
	</div>
</div>