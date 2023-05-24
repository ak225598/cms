<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database is unsuccessful".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql="INSERT INTO `cms`.`student` (`name`, `email`, `course`) VALUES ('$name' , '$email' , '$course');";

    if($con->query($sql) == true){
        echo "successfuly inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();

?>