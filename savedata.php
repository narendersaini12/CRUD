<?php
 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['class'];
 $stu_phone=$_POST['sphone'];

$conn= mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
    
 $mysql="INSERT INTO student(name,address,class,phone)VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result=mysqli_query($conn, $mysql) or die("query unsuccessful");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);









?>