<?php
    require_once ('settings.php');

    $connexio = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(!$connexio){die("ERROR" . mysqli_connect_error());}
?>
