<?php
require 'connect.php';
$query = $conn->query("SELECT * FROM `resepsionis` WHERE `resepsionis_id` = '$_SESSION[resepsionis_id]'") or die();
$fetch = $query->fetch_array();
$name = $fetch['name'];
