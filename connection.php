<?php

$username ='root';
$password ='';
$serverName ='localhost';
$database ='instagram';

$con = mysqli_connect($serverName, $username, $password, $database);

//to determine the connection is successful.
if($con){
    ?>
    <script>
        alert("connected");
        </script>
        <?php
}else{
    echo "not connected";
}
?>