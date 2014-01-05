<div>
	<?php 
		//$q = "select * from sites";
		//$result = DB::instance(DB_NAME)->select_rows($q);
		//$num_rows = mysqli_num_rows($result);
		$num = 0;
		$num2 = 1;
		$end_num = $loc_num*63;
		$start_num = $end_num-63;
	?>

	<?php foreach($kk as $post): ?>
	foreach
	<?php echo "foreach"; ?>
		<?php $num++; ?>
		<?php echo $num; ?>
		<?php if($start_num>$num): ?>
			<?php continue; ?>
		<?php endif; ?>
		<?php if($end_num<=$num):?>
			<?php break; ?>
		<?php endif;?>
		<a href="<?=$post['domain_address']?>" target="_blank"><div class = 'box'><?=$post['name'] ?></div></a>
		anchor
	<?php endforeach; ?>
	endforeach
</div>
<div class = 'clear-both'></div>


<div class = 'num-nav'>
	<?php foreach ($kk as $key):?>
		<?php if ($num2%63==0):?>

		<?php $temp = $num2/63; ?>
		<a href="/producers/total_part/<?=$temp?>"> &#60;<?= $temp; ?>&#62; </a>  
		<?php endif; ?>	

		<?php $num2++;?>
	
	<?php endforeach; ?>
</div>