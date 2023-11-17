<?php
if (isset($_POST['submit'])){

    if(empty($_POST['email'])){
        echo "Email must be set <br/>";
    }else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "email must be valid <br/>";
    }

    }
    if(empty($_POST['title'])){
        echo "title must be set<br/>";
    }else{
        $title  = $_POST['title'];
        if(!preg_match('/[a-zA-Z\s]+$/', $title)){
            echo "Title must be letters and spaces";
        }
    }
    if(empty($_POST['requirements'])){
        echo "requirements must be set";
    }else{
        $requirements  = $_POST['title'];
        if(!preg_match('/[a-zA-Z\s]+$/', $requirements)){
            echo "Requirements must be letters and spaces";
        }
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
