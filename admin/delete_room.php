<?php
	require_once 'connect.php';
	$sql = ("DELETE FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die();
	header("location:room.php");
