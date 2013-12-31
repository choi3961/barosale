<!--
	This is for the landing page of the webpage.
-->

<!--
	This contains the contents of the page.
-->
<div class = 'container'>
	<!--
		This is the head part of of the page.
	-->
	<div class = 'header'>
		<div class = 'header02'>
			<ul class = 'header02-ul'>
				<li><a href="/producers/local/강원도" class = 'header02-local'>강원도</a></li>
				<li><a href="/producers/local/경기도" class = 'header02-local'>경기도</a></li>
				<li><a href="/producers/local/충청북도" class = 'header02-local'>충청북도</a></li>
				<li><a href="/producers/local/충청남도" class = 'header02-local'>충청남도</a></li>
				<li><a href="/producers/local/경상북도" class = 'header02-local'>경상북도</a></li>
				<li><a href="/producers/local/경상남도" class = 'header02-local'>경상남도</a></li>
				<li><a href="/producers/local/전라북도" class = 'header02-local'>전라북도</a></li>
				<li><a href="/producers/local/전라남도" class = 'header02-local'>전라남도</a></li>
			</ul>
		</div>
	</div><br>
	<hr>

	<!--
		This is the left part of the landing page.
	-->
	<div class = 'lefter'>
		<ul>
			<li class = 'category01'>과일류
				<ul class = 'cat02'>
					<li ><a href="/producers/category02/사과">사과</a></li>
					<li ><a href="/producers/category02/배">배</a></li>
					<li class = 'category02'><a href="/producers/category02/토마토">토마토</a></li>
					<li class = 'category02'><a href="/producers/category02/포도">포도</a></li>
					<li class = 'category02'><a href="/producers/category02/복숭아">복숭아</a></li>
					<li class = 'category02'><a href="/producers/category02/참외">참외</a></li>
					<li class = 'category02'><a href="/producers/category02/딸기">딸기</a></li>
					<li class = 'category02'><a href="/producers/category02/대추">대추</a></li>
					<li class = 'category02'><a href="/producers/category02/블루베리">블루베리</a></li>
				</ul>
			</li>
			<li class = 'category01'>국산차
				<ul>
					<li class = 'category02'><a href="/producers/category02/차">차</a></li>
					<li class = 'category02'><a href="/producers/category02/국화차">국화차</a></li>
				</ul>
			</li>
			<li class = 'category01'>곡류
				<ul>
					<li class = 'category02' id = '30'><a href="/producers/category02/쌀">쌀</a></li>
					<li class = 'category02'><a href="/producers/category02/보리">보리</a></li>
					<li class = 'category02'><a href="/producers/category02/콩">콩</a></li>
					<li class = 'category02'><a href="/producers/category02/고추">고추</a></li>
				</ul>
			</li>
			<li class = 'category01'>육류
				<ul>
					<li class = 'category02'><a href="/producers/category02/소고기">소고기</a></li>
					<li class = 'category02'><a href="/producers/category02/닭고기">닭고기</a></li>
				</ul>
			</li>
			<li class = 'category01'>버섯류
				<ul>
					<li class = 'category02'><a href="/producers/category02/송이버섯">송이버섯</a></li>
					<li class = 'category02'><a href="/producers/category02/표고버섯">표고버섯</a></li>
					<li class = 'category02'><a href="/producers/category02/느타리버섯">느타리버섯</a></li>
				</ul>
			</li>
			<li class = 'category01'>식품류
				<ul>
					<li class = 'category02'><a href="/producers/category02/한과">한과</a></li>
					<li class = 'category02'><a href="/producers/category02/김치">김치</a></li>
					<li class = 'category02'><a href="/producers/category02/인삼제품">인삼제품</a></li>
				</ul>
			</li>
			<li class = 'category01'>기타
				<ul class = 'cat02'>
					<li class = 'category02'><a href="/producers/category02/체험마을">체험마을</a></li>
					<li class = 'category02'><a href="/producers/category02/기타">기타</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<!--
		This is the body part 
	-->
	<div class = 'center'>
		<?php if(isset($content02)) echo $content02; ?>
	</div>

	<!--
		This is right part of the landing page.
	-->
	<div class = 'righter'>
		<div class = 'right-menu'><a href="/producers/farmers_posts">Farmers&#39; posts</a></div>
	</div>

	<!--
		This is bottom part of the landing page.
	-->	
	<div class = 'footer'>
		<div class = 'sub-footer'>

  		</div>
	</div>
</div>