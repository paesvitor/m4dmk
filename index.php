<?php

// $root = $_SERVER['DOCUMENT_ROOT'].'/nac1';

require_once("header.php");

if (isset($_SESSION['uid'])) {

	include("panel.php");
} else {
	header("Location: signin.php");
}

