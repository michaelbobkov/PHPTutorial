<?php
$title = $email = $requirements ='';
$errors = array('email'=>'', 'title'=>'', 'requirements'=>'');
if (isset($_POST['submit'])){

    if(empty($_POST['email'])){
        $errors['email'] = "Email must be set <br/>";
    }else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email must be valid <br/>";
    }

    }
    if(empty($_POST['title'])){
        $errors['title'] = "Title must be set<br/>";
    }else{
        $title  = $_POST['title'];
        if(!preg_match('/[a-zA-Z\s]+$/', $title)){
            $errors['title'] = "Title must be letters and spaces<br/>";
        }
    }
    if(empty($_POST['requirements'])){
        $errors['requirements'] = "Requirements must be set<br/>";
    }else{
        $requirements  = $_POST['title'];
        if(!preg_match('/[a-zA-Z\s]+$/', $requirements)){
            $errors['requirements'] = "Requirements must be letters and spaces<br/>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php'); ?>

<body class="grey lighten-4">
<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h3 class="center"></h3>
    <form class="white" action="add.php" method="post">
        <label for="email">Your Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo $errors['email']?></div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title)?>">
        <div class="red-text"><?php echo $errors['title']?></div>
        <label for="requirements">Requirements:</label>
        <input type="text" id="requirements" name="requirements" value="<?php echo htmlspecialchars($requirements)?>">
        <div class="red-text"><?php echo $errors['requirements']?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>


<?php include('templates/footer.php'); ?>
</body>
</html>
