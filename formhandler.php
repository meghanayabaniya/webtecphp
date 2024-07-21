<?php
    $first_name=sanitize($_POST['fName']);
    $last_name=$_POST['lName'];
    $age=$_POST['age'];
    $roll=$_POST['roll'];


    function sanitize($val){
        $sanitizedVal = htmlspecialchars($val);
        $sanitizedVal = trim($sanitizedVal);
        return $sanitizedVal;
        
    }

    $connection=new mysqli("localhost","mysql","352781");
    if($connection->connect_error){
        die('connection failed!!!');
    }
    else{
        echo"connection successful";
    }

    echo $first_name;
    echo $last_name;
    echo $age;
    echo $roll;

?>