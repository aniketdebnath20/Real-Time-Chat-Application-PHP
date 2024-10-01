<?php

$room = $_POST['room'];

if (strlen($room) > 20 or strlen($room) < 4) {
    $message = "Plaese Choose the name between 4 to 20 characters";
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/CHAT NOTE/2_page.php";';
    echo '</script>';

} else if (!ctype_alnum($room)) {
    $message = "Plaese choose an  apphanumeric room name";
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/CHAT NOTE/2_page.php";';
    echo '</script>';

} else {
    include './compent/dbconnect.php';

}
include './compent/dbconnect.php';

$sql = "SELECT * FROM `rooms` WHERE roomname ='$room'";
$result = mysqli_query($conn, $sql);
if ($result) {

    if (mysqli_num_rows($result) > 0) {

        $message = "Plaese choose a different room name. This room is alerady claimed";
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/CHAT NOTE/2_page.php";';
        echo '</script>';
    } else {

        $sql = "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', current_timestamp())";
        if (mysqli_query($conn, $sql)) {

            $message = "Your room is ready and you can chat";
            echo '<script language="javascript">';
            echo 'alert("' . $message . '");';
            echo 'window.location="http://localhost/CHAT NOTE/4_page.php?roomname=' . $room . '";';
            echo '</script>';
        }

    }
} else {
    echo "error" . mysqli_errno($conn);
}


?>
