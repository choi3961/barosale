<!-- This is the page the user can add the post -->
<div class = 'container'>
	<!--
		This is the head part of the page.
	-->
	<div class = 'header'>
		<div class = 'header03'>홍 보 게 시</div>
	</div>

	<!--
		This is the body part of the page.
	-->
	<div class = 'container02'>
		<div class = 'center02'>
			<form method='POST' action='/posts/p_add' class='form-standard'>
			    <label for='content'>새 글:</label><br>
			    <textarea name='content' id='content'></textarea><br><br>
			    <input type='submit' value='게시하기'>
			</form> 
		</div>
	</div>
</div>