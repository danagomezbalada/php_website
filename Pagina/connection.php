<?php
    require_once ('settings.php');

    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(!$connection){die("ERROR" . mysqli_connect_error());}
?>