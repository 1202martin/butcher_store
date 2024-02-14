<?php
    if (! isset($_SESSION))
    {
        session_start();
    }
    require "header.php";
	echo "Hello";
?>