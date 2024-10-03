<?php

include "./compent/dbconnect.php";

$room = $_POST['room'];
$sql = "SELECT msg, stime, ip FROM msg WHERE room = '$room'";

$html_content = "";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

   while($row = mysqli_fetch_assoc($result)){

     $res = $res . '<div class="container">';
     $res = $res . $row['ip'];
     $res = $res . "says <p>" . $row['msg'];
     $res = $res . '</p> <span class="time_right">' . $row["stime"] . '</span> </div>';


   }



}


?>