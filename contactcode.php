<?php

    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['subject'];

    $d=$_POST['message'];

    $conn = mysqli_connect("localhost", "root", "", "hbwebsite");


    $ins = "insert into contactus(name,email,subject,massage)values('$a', '$b','$c','$d')";


    if (mysqli_query($conn, $ins)) {
        echo "data store";
    }
     else {
        echo "data not store";
    }

?>