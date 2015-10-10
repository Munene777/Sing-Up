<?php
session_start();
include('configdb.php');
if(isset($_POST['submit']))
{
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password' AND com_code IS NULL";
    $result = mysqli_query($mysqli,$query)or die(mysql_error());
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if( $num_row ==1 )
    {
        $_SESSION['user_name']=$row['username'];
        header("Location: member.php");
        exit;
    }
    else
    {
        header("Location: signup.html");
        exit;
    }
}
?>
