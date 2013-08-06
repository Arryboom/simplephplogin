<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<div>
    <!-- if you need users's information, just put them into the $_SESSION variable and output them here -->
    Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.<br />
    Try to close this browser tab and open it again. Still logged in! ;)<br />
    And here's your profile picture (from gravatar):<br />
    <?php //echo $login->user_gravatar_image_url; ?>
    <?php echo $login->user_gravatar_image_tag; ?>
</div>

<div>

<?php
	require_once("/var/www/domains/prestashop/samba/login/2/config/conf.php");
?>

    <a href=<?php echo SHORTPATH  . "index.php?logout>" ?> <?php echo LOGOUT  ?> </a>
    <a href=<?php echo SHORTPATH  . "edit.php>" ?> Edit user data</a>
</div>
