<!--
	This shows the contents of the landing page.
-->
<div>
	<?php 
		$q = "select * from sites";
		$result = DB::instance(DB_NAME)->select_rows($q);
		//$num_rows = mysqli_num_rows($result);
		$num = 1;
		$num2 = 1;
	?>

	<?php foreach($result as $post): ?>
		<?php if($num >63): ?>
		<?php break; ?>
		<?php endif; ?>
		<a href="<?=$post['domain_address']?>" target="_blank"><div class = 'box'><?=$post['name'] ?></div></a>
		<?php $num++; ?>
	<?php endforeach; ?>
</div>
<div class = 'clear-both'></div>

<div class = 'num-nav'>
	<?php foreach ($result as $key):?>
		<?php if ($num2%63==0):?>

		<?php $temp = $num2/63; ?>
		<a href="/producers/total_part/<?=$temp?>"> &#60;<?= $temp; ?>&#62; </a>  
		<?php endif; ?>	

		<?php $num2++;?>
	
	<?php endforeach; ?>
</div>