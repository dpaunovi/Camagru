<?php

	session_start();
	require '../../config/init.php';
	if (!$_SESSION['id'])
		header("location: ./");

	require '../../modeles/account/modify_mail.php';

?>
