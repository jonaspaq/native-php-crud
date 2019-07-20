<?php
myConnect();
function myConnect(){

    $servername = "localhost";
    $dbname = "nativephp";
    $dbusername = "root";
    $dbpassword = null;

    $conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

    if($conn){
        //echo "Success!";
        return $conn;
    }else{
        echo "No connection!";
    }
}
?>