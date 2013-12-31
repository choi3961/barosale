<!-- This is sign up page to be displayed -->
<div class = 'container'>

    <!--
        This is the head part of the page.
    -->
    <div class = 'header'>
        <div class = 'header03'>Sign up</div>
    </div>

    <!--
        This is the body part of the page.
    -->
    <div class = 'container02'>
        <div class='center02'>
            <!-- sign up interface page -->
            <form method='POST' action='/users/p_signup' class='form-standard'>
                First Name <span class = 'required'>*</span><br>
                <input type='text' name='first_name' required><br><br>
                Last Name <span class = 'required'>*</span><br>
                <input type='text' name='last_name' required><br><br>
                Email <span class = 'required'>*</span><br>
                <input type='text' name='email' required> <span id = 'email'></span><br><br>
                Password <span class = 'required'>*</span><br>
                <input type='password' name='password' required> <span id = 'password'></span><br><br>

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