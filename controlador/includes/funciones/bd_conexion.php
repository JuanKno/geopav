<?php
    $conn = new mysqli('localhost', 'root','', 'goepav');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }

    // Carlos-110220
