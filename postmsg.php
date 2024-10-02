<?php

include "./compent/dbconnect.php";

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

$sql = "INSERT INTO `msg` (`msg`, `romm`, `ip`) VALUES ('$msg', '$room', '$ip');";
mysqli_query($conn, $sql);
mysqli_close($conn);


?>