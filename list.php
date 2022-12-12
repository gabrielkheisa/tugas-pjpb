<?php 

    $connection = new mysqli("localhost","root","","validator");
    $data       = mysqli_query($connection, "select * from profil");
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);