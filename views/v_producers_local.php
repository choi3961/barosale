<!--
	This shows the farmers' sites according to the local area.
-->
<div class = 'local-title'>
	<img src="../../images/<?=$part?>.jpg" alt = '<?=$part?> 농산물' width='70px' height = '50px'>
	<?php echo $part ?>
	농산물 직거래 사이트 모음
</div>
<div>
	<?php 
		$num = 0;
		$nav_num=0; 
		$num2 = 0;
	?>
	<?php foreach($local as $site): ?>
		<?php if($num <63): ?>
			<a href="<?=$site['domain_address']?>" target="_blank">
				<div class = 'box'><?=$site['name'] ?><br><br><?=$site['local02'] ?>
					<?=$site['category02'] ?></div></a>
	 	<?php endif; ?>
	 	<?php	$num++; ?>
	<?php endforeach; ?>
</div>

<div class = 'num-nav'>
	<?php foreach ($local as $key):?>
		<?php if ($num2%63==0):?>

		<?php $temp = $num2/63; ?>
		<a href="/producers/local_part/<?=$temp+1?><?=$part?>"> &#60;<?= $temp+1; ?>&#62; </a>  
		<?php endif; ?>	

		<?php $num2++;?>
	
	<?php endforeach; ?>
</div>