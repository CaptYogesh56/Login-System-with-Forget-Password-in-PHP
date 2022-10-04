<?php

session_start();
include('connect/connection.php'); 


if(isset($_SESSION['uid']))
{
    $id = $_SESSION['uid'];
    $sql = "SELECT * FROM login where userid = '$id' ";
    $row = mysqli_query($connect, $sql);
    
while($ret = mysqli_fetch_array($row))
{
    $name = $ret['email'];

    echo "You are logged in as ".$name;
}
}

else{
    echo "You are not logged in!! Please log in to continue!!";
}

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Welcome!!!!!!</h1>

<form action="logout.php">

<button type="submit" name="logoutbtn">Log Out</button>

</form>

</body>
</html>';