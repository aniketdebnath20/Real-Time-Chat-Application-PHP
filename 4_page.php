<?php

//get parameters

$roomname = $_GET['roomname'];

include './compent/dbconnect.php';



$sql = "SELECT * FROM `rooms` WHERE roomname ='$roomname'";

$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) == 0) {

        $message = "This room does not exist. try to create new room";
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/CHAT NOTE/2_page.php";';
        echo '</script>';
    }

} else {
    echo "error" . mysqli_errno($conn);
}

?>




<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker h-auto {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        .main-container {
            height: 75vh;
            overflow: scroll;
            scrollbar-width: none;
            margin-inline: auto;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="mt-4 mx-auto">

    <h2>Let's Chat</h2>
    
    <div class="main-container">

        <div class="container h-auto">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span>
        </div>

        <div class="container darker h-auto">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
            <p>Hey! I'm fine. Thanks for asking!</p>
            <span class="time-left">11:01</span>
        </div>

        <div class="container h-auto">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            <p>Sweet! So, what do you wanna do today?</p>
            <span class="time-right">11:02</span>
        </div>

        <div class="container darker h-auto">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
            <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
            <span class="time-left">11:05</span>
        </div>

        <div class="container darker h-auto">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span>
        </div>

        <div class="container darker h-auto">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
            <p>Hey! I'm fine. Thanks for asking!</p>
            <span class="time-left">11:01</span>
        </div>

        <div class="container h-auto">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            <p>Sweet! So, what do you wanna do today?</p>
            <span class="time-right">11:02</span>
        </div>

        <div class="container darker h-auto">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
            <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
            <span class="time-left">11:05</span>
        </div>

        <div class="container h-auto">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
            <p>Sweet! So, what do you wanna do today?</p>
            <span class="time-right">11:02</span>
        </div>

        <div class="container darker h-auto">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
            <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
            <span class="time-left">11:05</span>
        </div>

    </div>

    <input type="text" class="form-control" name="usermsg" id="usermsg">
    <button class="btn btn-sm bg-primary text-white" id="submitmsg" > Send </button>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

<script type="text/javascript">

var clientmsg = $('usermsg').val();
$("#submitmsg").click(function(){
  $.post("postmsg.php", { text: clientmsg, room: '<?php echo $roomname ?>', ip: <?php echo $_SERVER['REMOTE_ADDR']  ?>  });

  function(data, status){
    document.getElementsByClassName('#anyClass')[0].innerHTML = data;

  } 

});

</script>

</html>