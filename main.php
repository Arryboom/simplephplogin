<?php

function UserExist($user, $pass)
{
		
	
		
return false;		
}

function UserInsert($user, $pass)
{
		
	$objSQL= $inst->prepare("INSERT INTO usuarios (id ,usuario ,password, email, fecha, redirect, lastlogin, locked, idgroup, IP, useragent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
	
	$objSQL->bindParam(1, $id);
	$objSQL->bindParam(2, $user);
	$objSQL->bindParam(3, $pass);
	$objSQL->bindParam(4, $email);
	$objSQL->bindParam(5, $date);
	$objSQL->bindParam(6, $move);
	$objSQL->bindParam(7, $lastview);
	$objSQL->bindParam(8, $locking);
	$objSQL->bindParam(9, $idG);
	$objSQL->bindParam(10, $IP);
	$objSQL->bindParam(11, $useragent);
	
	$id = 1000;
	$user = "YOU";
	$pass = "HATE";
	$email = "rammste@asd.com";
	$date = "01/02/2001";
	$move = "/last/trata/index.php";
	$lastview = "01/10/2010";
	$locking = 2;
	$idG = 1;
	$IP = "192.168.1.1";
	$useragent = "Mozilla";
	
	var_dump($objSQL->execute());		
		
return false;		
}
	
	$inst = new PDO('mysql:host=192.168.1.99;dbname=ja', "h4x0r", "l33t");
	
	if($inst == NULL)
	exit(0);
	
		else
		print "Listo\n";
		
	


?>
