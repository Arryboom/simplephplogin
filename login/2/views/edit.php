
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

<h2>
    Hey, <?php echo $_SESSION['user_name'] .  " " . SALUDO ?>
</h2>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name">
    <label for="edit_input_username">New username (username cannot be empty and must be azAZ09 and 2-64 characters)</label><br/>
    <input id="edit_input_username" class="login_input" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo CURRENT .  ": " . $_SESSION['user_name']; ?>)<br/>
    <input type="submit"  name="user_edit_submit_name" value="Change username" />
</form>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
    <label for="edit_input_email">New email</label><br/>
    <input id="edit_input_email" class="login_input" type="email" name="user_email" required /> (currently: <?php echo $_SESSION['user_email']; ?>)<br/>
    <input type="submit"  name="user_edit_submit_email" value="Change email" />
</form>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
    <label for="edit_input_password_old"> <?php echo OLDPWD ?> </label>
    <input id="edit_input_password_old" class="login_input" type="password" name="user_password_old" autocomplete="off" />        
    <br/>
    <label for="edit_input_password_new">Your NEW Password</label>
    <input id="edit_input_password_new" class="login_input" type="password" name="user_password_new" autocomplete="off" />        
    <br/>
    <label for="edit_input_password_repeat">Repeat NEW password</label>
    <input id="edit_input_password_repeat" class="login_input" type="password" name="user_password_repeat" autocomplete="off" />        
    <br/>
    <input type="submit"  name="user_edit_submit_password" value="Change password" />
</form>

<a href="javascript:history.back()" ><?php echo BACK ?></a>
