<?php


$a=$_POST['email'];
$b=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","hbwebsite");

$sel="select * from s where `email`='$a'";

$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
if($k['2']==$a)
{

    if($k['6']==$b){
      # echo "you are login";hhhng,jv
     
         session_start();
         $_SESSION['user']=$a;

      header("location:user.php");
    }

else{
    echo "password wrong";
}

}
else{
    echo "email is wrong";
}

?>