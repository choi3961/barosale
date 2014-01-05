<!-- This displays the user's own page of posts -->
<div class = 'container'>
	<!--
		This is the head part of the page.
	-->
	<div class = 'header'>
		<div class = 'header03'>나 의 글</div>
	</div>

	<!--
		This is the body part of the page.
	-->
	<div class = 'container02'>
		<?php foreach($posts as $post): ?>
		<div class = 'myposts'>
			<article>
			    <!--<div class = 'article-header'>You posted:</div>-->
			    <div class = 'article-content'><p><?=$post['content']?></p></div>
			    <div class = 'article-time'>
			    	<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			        	<?=Time::display($post['created'])?>
			    	</time>
			    </div>
			</article>
		</div>
		<div class = 'article-control'>
			<div>
				<form action = "/posts/update/<?=$post['post_id']?>" method = "post" >
					<input type = 'submit' value = '수정'>
				</form>
			</div>
			<div>
				<form action = "/posts/remove/<?=$post['post_id']?>" method = "post" >
					<input type = 'submit' value = '제거' onClick = "return confirm('이 게시물을 제거하시겠습니까?');">
				</form>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>