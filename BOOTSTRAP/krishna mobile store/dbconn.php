<?php

 $con = mysqli_connect("localhost","root","","krishnauserdata");
 									
 if ($con) {
 	echo "connection was successfull";
 }
 else{
 	echo "connection fail";
 }

     // mysqli_select_db($con, 'krishnauserdata');
     // $name = $_POST['name'];
     // $email = $_POST['email'];
     // $phone = $_POST['phone'];
     // $message = $_POST['message'];

     // $query = "insert into userinfo (name, email, phone, message)
     //           values ('$name','$email','$phone','$message') ";

     // mysqli_query($con,$query);

 ?>









