<!-- This is login page to be rendered-->
<div class = 'container'>
    <!--
        This is the head part of the page.
    -->
    <div class = 'header'>
        <div class = 'header03'>Log in</div>
    </div>

    <!--
        This is the body part of the page.
    -->
    <div class = 'container02'>
        <div class='center02'>
            <!-- login interface -->
            <form method='POST' action='/users/p_login' class='form-standard'>
                Email<br>
                <input type='text' name='email' required><br><br>
                Password<br>
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
                    You have to log in.
                </div><br>
                <?php endif; ?>

                <input type='submit' value='Log in'>
            </form>
        </div>
    </div>
</div>