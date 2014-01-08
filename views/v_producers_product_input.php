<!--This is for product input of farmers-->
<div class = 'container'>

    <!--
        This is the head part of the page.
    -->
    <div class = 'header'>
        <div class = 'header03'>상품입력</div>
    </div>

    <!--
        This is the body part of the page.
    -->
    <div class = 'container02'>
        <div class='center02'>
            <!-- sign up interface page -->
            <form method='POST' action='/producers/p_product_input' class='form-standard'>
                제품명 <span class = 'required'>*</span><br>
                <input type='text' name='product_name' required><br><br>

                생산자 실명 <span class = 'required'>*</span><br>
                <input type='text' name='product_owner' required><br><br>

                생산품 산지 <span class = 'required'>*</span><br>
                <input type='text' name='product_from' required><br><br>

                생산품 URL <span class = 'required'>*</span><br>
                <input type='text' name='product_uri' required><br><br>                                             
 
                <input type='submit' value = '상품 입력'>
            </form>
        </div>
    </div>
</div>