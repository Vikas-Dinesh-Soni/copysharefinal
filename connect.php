<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "csdatabase";

$connect = mysqli_connect($server,$username,$password,$db);


if($connect){
 
}
else{
    ?>
    <script>
        alert("Database Not Connected");
    </script>
    <?php
}


?>