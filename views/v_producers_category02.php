<!--
	This shows the farmers' sites according to the categories of the products.
-->
<div class = 'category02-title'>
	<img src="../../images/<?=$part?>.jpg" alt = '<?=$part?> 농산물' width='70px' height = '50px'>
	<?php echo $part?> 농산물 직거래 사이트 모음
	
</div>
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
					<a href="<?=$site['domain_address']?>" target="_blank">
						<div class = 'box'><?=$site['name'] ?><br><br><?=$site['local'] ?>
							<?=$site['local02'] ?>
						</div>
					</a>
			 	<?php endif; ?>
			 	<?php	$num++; ?>
		<?php endforeach; ?>	
	<?php endif; ?>
</div>