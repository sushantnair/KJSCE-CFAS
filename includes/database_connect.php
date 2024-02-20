<?php
    $connection = mysqli_connect("127.0.0.1", "root", "", "kjsce_cfas");
    if(mysqli_connect_errno()){
        echo "Connection Unsuccessful. Please contact the website administrator or try again later.";
        return;
    }
?>
