<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!-- errors & messages --->

<?php

// show negative messages
if ($login->errors) {
    foreach ($login->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($login->messages) {
    foreach ($login->messages as $message) {
        echo $message;
    }
}

?>             

<!-- request password reset form box -->
<form method="post" action="password_reset.php" name="password_reset_form">
    <label for="password_reset_input_username"><?php echo STRRECOVER ?> </label>
    <input id="password_reset_input_username" class="password_reset_input" type="text" name="user_name" required />
    <input type="submit"  name="request_password_reset" value= <?php echo SND ?> />
</form>

<a href="javascript:history.back()">Back to Login Page</a>

