<div class="center">
	<div class="torrents">
		<?php
		?>
		<table>	
			<tr>
				<th width="100%">Name / Year</th>
				<th>Time</th>
				<th>Size</th>
				<th class="sign"><?php echo $this->Html->image("layer_cake/snatched.png"); ?></th>
				<th class="sign"><?php echo $this->Html->image("layer_cake/seeders.png"); ?></th>
				<th class="sign"><?php echo $this->Html->image("layer_cake/leechers.png"); ?></th>
			</tr>
			
			<?php
				foreach($albums as $album_id => $info):
					$album = $info["album"];
					$torrents = $info["torrents"];
			?>
			<tr class="album">
				<td colspan="6">
					<p><?php echo $this->Formatter->formatAlbum($album); ?></p>
				</td>
			</tr>
			<?php
				foreach($torrents as $torrent): 
					$actions = array(
						$this->Html->link("DL", "/torrents/download/" . $torrent["Torrent"]["id"]),
						$this->Html->link("RP", "/torrents/report/" . $torrent["Torrent"]["id"])
					);
			?>
			<tr class="torrent">
				<td>
					<?php echo $this->Formatter->formatTorrent($torrent); ?>
					<span class="actions">
						[<?php echo implode(" | ", $actions); ?>]
					</span>
				</td>
				<td><?php echo $this->Time->timeAgoInWords($torrent["Torrent"]["date"]); ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<?php
				endforeach;
				endforeach;
			?>
		</table>
	</div>
</div>