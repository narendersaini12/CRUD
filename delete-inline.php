<?php
echo $stu_id=$_GET['id'];

include 'config.php';    
$sql = "DELETE FROM student WHERE id={$stu_id}";
    $result=mysqli_query($conn, $sql) or die("query unsuccessful");

    header("Location: http://localhost/crud/index.php");
    mysqli_close($conn);





?>