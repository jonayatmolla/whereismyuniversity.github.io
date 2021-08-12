<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
   echo "No connection";
}

mysqli_select_db( $con, 'baraktime');

$user = $_POST['user'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];



$query = "insert into userinfodata( user, phone, email, comment)values('$user','$phone', '$email', '$comment')";
echo "$query";
mysqli_query($con, $query);

header('location:index.php');


?>