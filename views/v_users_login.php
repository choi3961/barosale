<!-- This is login page to be rendered-->
<div class = 'container'>
    <!--
        This is the head part of the page.
    -->
    <div class = 'header'>
        <div class = 'header03'>로 그 인</div>
    </div>

    <!--
        This is the body part of the page.
    -->
    <div class = 'container02'>
        <div class='center02'>
            <!-- login interface -->
            <form method='POST' action='/users/p_login' class='form-standard'>
                E-mail<br>
                <input type='text' name='email' required><br><br>
                비 밀 번 호<br>
                <input type='password' name='password' required><br><br>
                <?php if($error == 'error'): ?>
                <div class='error'>
                    Login failed. Please double check your email and password.
                </div><br>
                <?php endif; ?>

                <?php if($error == 'registered'): ?>
                <div class='error'>
                    You are registered.
                </div><br>
                <?php endif; ?>

                <?php if($error == 'login'): ?>
                <div class='error'>
                    로그인 하시기 바랍니다.
                </div><br>
                <?php endif; ?>

                <input type='submit' value='로 그 인'>
            </form>
        </div>
    </div>
</div>