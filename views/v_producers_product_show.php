<!--This is for showing the products of farmers'-->
<div class = 'container'>
    <?php 
        $q = "select * from products";
        $result = DB::instance(DB_NAME)->select_rows($q);
        //$num_rows = mysqli_num_rows($result);
        $num = 1;
        $num2 = 1;
    ?>

    <!--
        This is the head part of the page.
    -->
    <div class = 'header'>
        <div class = 'header03'>상품진열대</div>
    </div>

    <!--
        This is the body part of the page.
    -->
    <div class = 'container02'>
        <div class='center02'>
        	<?php for($int=1 ; $int<2 ; $int++): ?>
                <pre> 
상품명  가격     생산자 실명   생산지역
<hr>
<?php foreach($result as $product): ?>
<?= $product['product_name'] ?><br>
<?php endforeach; ?> 
                </pre>
            
        	<?php endfor; ?>
        </div>
    </div>
</div>


<!-- -->
<div>

</div>
<div class = 'clear-both'></div>
