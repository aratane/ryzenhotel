<?php
	session_start();
	session_unset(resepsionis_id);
	header("location:index.php");
