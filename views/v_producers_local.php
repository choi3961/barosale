<!--
	This shows the farmers' sites according to the local area.
-->
<div>
	<?php 
		$num = 0;
		$nav_num=0; 
		$num2 = 1;
	?>
	<?php foreach($local as $site): ?>
		<?php if($num <61): ?>
			<a href="<?=$site['domain_address']?>" target="_blank"><div class = 'box'><?=$site['name'] ?></div></a>
	 	<?php endif; ?>
	 	<?php	$num++; ?>
	<?php endforeach; ?>
</div>

<div class = 'num-nav'>
	<?php foreach ($local as $key):?>
		<?php if ($num2%63==0):?>

		<?php $temp = $num2/63; ?>
		<a href="/producers/local_part/<?=$temp?>"> &#60;<?= $temp; ?>&#62; </a>  
		<?php endif; ?>	

		<?php $num2++;?>
	
	<?php endforeach; ?>
</div>