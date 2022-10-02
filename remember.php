<?php
$user = 'admin';
$pass = md5('admin');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $user && MDS($password) == $pass) 
{
	$_SESSION['login'] = TRUE;

	if (isset($_POST['remember']));
	{
		$time = time();
		setcookie('login', $user, $time + 3600);
	}
	header('location : Web Home TI.html');
}
else{
	echo 'login gagal';
}

 ?>