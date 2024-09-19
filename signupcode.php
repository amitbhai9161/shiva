<?php

    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['phonenum'];
#$d=$_FILES['file'] ['tmp_name'];
   # $d=$_FILES['profile'];

    $e=$_POST['address'];
    $f=$_POST['password'];
    $g=$_POST['cpassword'];

    $conn = mysqli_connect("localhost", "root", "", "hbwebsite");
    $path="picture/";

    $ins = "insert into s(name,email,phone,picture,address,password,repassword)values('$a', '$b','$c','$filepath','$e','$f','$g')";
{  header("location:login.php");}

    if (mysqli_query($conn, $ins)) {
        echo "data store";
    }
     else {
        echo "data not store";
    }

?>