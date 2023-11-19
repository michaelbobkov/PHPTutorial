<?php

// connect to the database
$conn = mysqli_connect('localhost', 'michael', '1234', 'test');

// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

?>