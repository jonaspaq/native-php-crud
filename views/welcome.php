<!DOCTYPE html>
<!-- EVERYTHING MADE BY JONAS PAQUIBOT -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Native PHP CRUD</title>

    <link rel="stylesheet" href="../resources/css/custom.css">
</head>
<body style="display:flex;align-items:center">
    <div style="display:block;margin:auto;align:center;">
    <?php

    // MESSAGE OR ALERT
    if(isset($_GET['succIn'])){
        $geturl = $_GET['succIn'];
        if($geturl == "Success"){ 
            echo '<h1>Successfully added!</h1>';
        }else{
            echo '<h1>Fail adding data!</h1>';  
        }
    } ?>

    <!-- ADD FORM -->
    <form action="../controllers/UserController.php" method="POST">
        <input type="text" name="name" placeholder="Name" autofocus required/> <br>
        <input type="text" name="hobby" placeholder="Hobby" required/> <br>

        <input type="submit" value="Add Data" name="addUser" style="margin-top:10px"/>
    </form>

    <!-- DATA TABLE LIST -->
    <table style="margin-top:20px;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Hobby</th>
        <th>Actions</th>
    </tr>
    <?php 
    include_once('../controllers/UserController.php');
    $users = loadUsers();

    foreach($users as $row){
        $id = "'".$row['id']."'"; $name = "'".$row['name']."'"; $hobby = "'".$row['hobby']."'";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['hobby']."</td>";?>
        <td><button type="button" onclick="updateDetails(<?php echo $id.','.$name.','.$hobby; ?>);"> Update </button>
        <a onclick="return confirm('Are you sure you want to delete this data?')" href="../controllers/UserController.php/?delete=<?php echo $row['id'];?>">Delete</a></td>
        <?php
        echo "</tr>";
    }

    ?>
    </table>
    </div>

    <!-- UPDATE MODAL -->
    <div class="customModal" id="updateModal" style="display:none;">
        <div class="updateBox">
            <h3>Update Data Modal</h3>
            <form action="../controllers/UserController.php" method="POST">
            <input type="hidden" name="id" id="updateID">
            <input type="text" name="name" placeholder="Name" id="updateName" required/> <br>
            <input type="text" name="hobby" placeholder="Hobby" id="updateHobby" required/> <br>

            <button type="button" onclick="closeModal();" id="closeBtn"> Cancel </button>
            <input type="submit" value="Update Data" name="updateData" />
            </form>
        </div>
    </div>
    


<script src="../resources/js/custom.js"></script>
</body>
</html>
<!-- EVERYTHING MADE BY JONAS PAQUIBOT -->