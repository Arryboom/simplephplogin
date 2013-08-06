<?php

require_once("/var/www/domains/prestashop/samba/login/2/config/conf.php");

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

<form method="post" action=<?php echo SHORTPATH . "index.php" ?> name="loginform">
    <label for="login_input_username"> <?php echo USR ?>  </label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />
    <label for="login_input_password"> <?php echo PWD ?>  </label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
    <input type="submit"  name="login" value= ' <?php echo LOGIN ?> ' />
</form>

<a href=<?php echo SHORTPATH . "password_reset.php" ?> > <?php echo FORGET ?> </a>
