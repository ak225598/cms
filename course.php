<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database is unsuccessful".mysqli_connect_error());
    }

    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];
    $credit_hours = $_POST['credit_hours'];

    $sql="INSERT INTO `cms`.`course` (`course_name`, `course_code`, `credit_hours`) VALUES ('$course_name' , '$course_code' , '$credit_hours');";

    if($con->query($sql) == true){
        echo "successfuly inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();

?>