<?php
session_start();

	if("username"){
		session_destroy();
		unset($_SESSION['SESS_MEMBER_ID']);
		// unset($_SESSION['SESS_MEMBER_REG_NO']);
		header("location: ../index.php");
	}
?>
