<!-- This provides the interface for the user to update the posts -->
<div class = 'container'>
	<!--
		This is head part of the page.
	-->
	<div class = 'header'>
		<div class = 'header03'>Update</div>
	</div>
	
	<!--
		This is body part of the page.
	-->	
	<div class = 'container02'>
		<?php $post = $posts[0] ?>
		<div class = 'center02'>
			<form method='POST' action="/posts/p_update/<?=$post_id?>" class="form-standard">
			    <label for='content'>Update:</label><br>
			    <textarea name='content' id='content'><?php echo $post['content']; ?></textarea><br><br>
			    <input type='submit' value='Update'>
			</form> 
		</div>
	</div>
</div>