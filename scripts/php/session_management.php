<?php
session_start();

if( !isset($_SESSION["username"]) ) {
	header("location: http://localhost/HackArizona/login.php");
}

?>