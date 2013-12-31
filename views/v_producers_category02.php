<!--
	This shows the farmers' sites according to the categories of the products.
-->
<div>
	<?php if(!$category02): ?>
		<?php echo "Sorry, no data for now"; ?>
	<?php else: ?>
		<?php 
			$num = 0;
			$nav_num=0; 
		?>
		<?php foreach($category02 as $site): ?>
				<?php if($num <60): ?>
					<a href="<?=$site['domain_address']?>" target="_blank"><div class = 'box'><?=$site['name'] ?></div></a>
			 	<?php endif; ?>
			 	<?php	$num++; ?>
		<?php endforeach; ?>	
	<?php endif; ?>
</div>