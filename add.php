<?php
if (isset($_POST['submit'])){

    if(empty($_POST['email'])){
        echo "Email must be set\n";
    }else{
    echo htmlentities($_POST['email']);

    }
    if(empty($_POST['title'])){
        echo "title must be set\n";
    }else{
        echo htmlentities($_POST['title']);

    }
    if(empty($_POST['requirements'])){
        echo "requirements must be set";
    }else{
        echo htmlentities($_POST['requirements']);

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('templates/head.php'); ?>
</head>
<body class="grey lighten-4">
<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h3 class="center"></h3>
    <form class="white" action="add.php" method="post">
        <label for="email">Your Email:</label>
        <input type="text" id="email" name="email">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <label for="requirements">Requirements:</label>
        <input type="text" id="requirements" name="requirements">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>


<?php include('templates/footer.php'); ?>
</body>
</html>
