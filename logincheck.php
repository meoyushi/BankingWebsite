<?php
include('conn.php');
$userid=$_POST['userid'];
$pass=$_POST['pass'];
$sql="select * from master_login where userid='$userid' and pass='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
 $_SESSION['userid']=$result['userid']; //User id column is set as session variable
//can be used to show login related information in template header
header('location: newindex.html');
//(use the name you gave to the page created in Assignment 7)
}
else
{ header('location: login.php'); }
?>