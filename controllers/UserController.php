<?php
require('myConnect.php');

if(isset($_POST['addUser'])){
    addUser();
}
if(isset($_GET['delete'])){
    deleteData();
}
if(isset($_POST['updateData'])){
    updateData();
}

function addUser(){
    $conn = myConnect();
    $id = null;
    $name = $_POST['name'];
    $hobby = $_POST['hobby'];

    $sql = "INSERT INTO user VALUES('$id', '$name', '$hobby')";

    $result = mysqli_query($conn,$sql);

    if($result){
        header('Location:../views/welcome.php?succIn=Success');
    }else{
        header('Location:../views/welcome.php?succIn=Fail');
    }
}

function deleteData(){
    $conn = myConnect();
    $id = $_GET['delete'];

    $sql = "DELETE FROM user WHERE id = $id ";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('Location:../../views/welcome.php?succDel=Success');
    }else{
        header('Location:../../views/welcome.php?succDel=Fail');
    }
}

function updateData(){
    $conn = myConnect();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $hobby = $_POST['hobby'];

    $sql = "UPDATE user SET name = '$name', hobby = '$hobby' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('Location:../views/welcome.php?succUpd=Success');
    }else{
        header('Location:../views/welcome.php?succUpd=Fail');
    }
    
}

function loadUsers(){
    $conn = myConnect();

    $sql = "SELECT * FROM user ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);

    if($result){
        return $result;
    }else{
        //echo "Failed or no Data";
    }
}
// <!-- EVERYTHING MADE BY JONAS PAQUIBOT -->
?>