<?php 

$stu_id=$_POST['sid'];
 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['sclass'];
 $stu_phone=$_POST['sphone'];

$conn= mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
    
 $mysql="UPDATE student SET name='{$stu_name}',address='{$stu_address}',class='{$stu_class}',phone='{$stu_phone}' WHERE id={$stu_id} ";

$result=mysqli_query($conn, $mysql) or die("query unsuccessful");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);









?>





?>