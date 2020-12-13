<?php
session_start();
$con=mysqli_connect('localhost','root','','bankingsystem');
$name1=$_SESSION['name'];
$q="select balance from users where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['balance'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select balance from users where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['balance'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update users set balance='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update users set balance='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into transactions(sender,receiver,balance)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    include 'customers.php';
    $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   
    
}
else
{
	include 'customers.php';
    $message="Sorry, insufficient balance!";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
}
?>