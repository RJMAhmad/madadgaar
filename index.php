<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<h1>login admin</h1>
<br>
<form action="login.php" method="post">

<p>enter your email</p>
<input type="text" name ="email" placeholder="enter your email">

<p>enter your password</p>
<input type="text" name="password" placeholder="enter your password">

<br><br>
<button type="submit" name="btn">login</button>
<br>
<a href="form.html">create an account</a>
<?php


// to change a session variable, just overwrite it
$_SESSION["uname"] = "Ahmad is Your Helper";
print_r($_SESSION);




    $conn = mysqli_connect("localhost", "root", "", "");
    if($conn){
        echo "connection established";

    }else{
        die("error");
    }

?>

</body>
</html>
