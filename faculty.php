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
    $department = $_POST['department'];

    $sql="INSERT INTO `cms`.`faculty` (`name`, `email`, `department`) VALUES ('$name' , '$email' , '$department');";

    if($con->query($sql) == true){
        echo "successfuly inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();

?>