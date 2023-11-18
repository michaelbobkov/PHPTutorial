<?php

//connect ot database
$connect = mysqli_connect('localhost', 'michael', '1234', 'test');

if(!$connect){
    echo 'Connection error: '.mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/head.php'); ?>

<body class="grey lighten-4">
<?php include('templates/header.php'); ?>

<?php include('templates/footer.php'); ?>
</body>
</html>
