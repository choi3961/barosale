<!--
	This shows the farmers' sites according to the local area.
-->
<div>
	<?php 
		$num = 0;
		$nav_num=0; 
	?>
	<?php foreach($local as $site): ?>
		<?php if($num <61): ?>
			<a href="<?=$site['domain_address']?>" target="_blank"><div class = 'box'><?=$site['name'] ?></div></a>
	 	<?php endif; ?>
	 	<?php	$num++; ?>
	<?php endforeach; ?>
</div>

