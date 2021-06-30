<?php
    setcookie("username", "", time() - 3600 * 30, "/");
    setcookie("role", "", time() - 3600 * 30, "/");
    header("Location: index.php");
	exit();
?>