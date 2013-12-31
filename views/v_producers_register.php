<!--

-->
<div class = 'container'>
    <div class = 'header'>
        <div class = 'header03'>Site-register</div>
    </div>
    <div class = 'container02'>
        <div class = 'center02'>
        <!-- sign up interface page -->
        <form method='POST' action='/producers/p_sites_register' class='form-standard'>
            Site name <span class = 'required'>*</span><br>
            <input type='text' name='name' required><br><br>
            Domain name <span class = 'required'>*</span><br>
            <input type='text' name='domain_address' required> <span id = 'domain_address'></span><br><br>
 
            <select name = 'local' required>
                <option value=''>**select**</option>
                <option value='강원도'>강원도</option>
                <option value='경기도'>경기도</option>
                <option value='충청북도'>충청북도</option>
                <option value='충청남도'>충청남도</option>
                <option value='경상북도'>경상북도</option>
                <option value='경상남도'>경상남도</option>
                <option value='전라북도'>전라북도</option>
                <option value='전라남도'>전라남도</option>
            </select> <span class = 'required'>*</span>

            <select name = 'category02' required>
                <option value=''>**select**</option>
                <option value='사과'>사과</option>
                <option value='배'>배</option>
                <option value='토마토'>토마토</option>
                <option value='포도'>포도</option>
                <option value='복숭아'>복숭아</option>
                <option value='참외'>참외</option>
                <option value='딸기'>딸기</option>
                <option value='대추'>대추</option>
                <option value='블루베리'>블루베리</option>
                <option value='차'>차</option>
                <option value='국화차'>국화차</option>
                <option value='쌀'>쌀</option>
                <option value='보리'>보리</option>
                <option value='콩'>콩</option>
                <option value='고추'>고추</option>
                <option value='소고기'>소고기</option>
                <option value='닭고기'>닭고기</option>
                <option value='송이버섯'>송이버섯</option>
                <option value='표고버섯'>표고버섯</option>
                <option value='느타리버섯'>느타리버섯</option>
                <option value='한과'>한과</option>
                <option value='김치'>김치</option>
                <option value='인삼제품'>인삼제품</option>
                <option value='체험마을'>체험마을</option>                                                 
            </select> <span class = 'required'>*</span><br><br>            

            <?php if($error == 'error'): ?>
            <div class='error'>
                Sign up failed. Please fill out all the fields.
            </div><br>
            <?php endif; ?>
            <?php if($error == 'failed'): ?>
            <div class='error'>
                Sign up failed. Your email is already registered.
            </div><br>
            <?php endif; ?>
            
            <input type='submit' value = 'submit'>
        </form>
        </div>
    </div>
</div>