<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/main02.css">
    
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
</head>

<body>	
    <!-- This is the interface for the pages the users could access through easily -->
	<div id='menu'>
        <a href='/'>Home  </a> |
        <!-- Menu for users who are logged in -->
        <a href='/producers/sites_register' class = 'menu-producers'>사이트등록</a> |
        <a href='/users/signup' class = 'menu-users'>회원가입</a> |
        <a href='/users/login' class = 'menu-users'>로그인</a> |
        <a href='/posts/add' class = 'menu-posts'>홍보하기</a> |
        <a href='/posts/index' class = 'menu-posts'>홍보내용보기</a> |
        <a href='/posts/mypage' class = 'menu-posts'>나의 게시물</a> |
        <a href='/posts/users' class = 'menu-posts'>홍보 선택</a> |        
        <!--
        <a href='/producers/product_input' class = 'menu-users'>product_input</a> |
        <a href='/producers/product_show' class = 'menu-users'>product_show</a> |
        -->
        <?php if($user):?>
            <a href='/users/logout'>로그 아웃</a> |

        <?php endif;?>
        <!--<a href='/administrator/upload' class = 'menu-users'>administrator</a> |-->
    </div>
    <div class = 'header01'>
            <h1><a href="/">전국 농산물 직거래 센터</a></h1>
            <span> 수수료무,  중간유통 무,  외국농산물 무</span>
    </div>
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <script src = "/js/jquery.js"></script>
    <script src = "/js/control.js"></script>
    <script src = "/js/navgoco.js"></script>
</body>
</html>