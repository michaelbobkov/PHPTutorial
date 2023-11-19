<?php

include('config/db_connect.php');

$email = $title = $requirements = '';
$errors = array('email' => '', 'title' => '', 'requirements' => '');

if(isset($_POST['submit'])){

    // check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
    } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    // check title
    if(empty($_POST['title'])){
        $errors['title'] = 'A title is required';
    } else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    // check requirements
    if(empty($_POST['requirements'])){
        $errors['requirements'] = 'At least one requirements is required';
    } else{
        $requirements = $_POST['requirements'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $requirements)){
            $errors['requirements'] = 'Requirements must be a comma separated list';
        }
    }

    if(array_filter($errors)){
        //echo 'errors in form';
    } else {
        // escape sql chars
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $requirements = mysqli_real_escape_string($conn, $_POST['requirements']);

        // create sql
        $sql = "INSERT INTO products(title,email,requirements
) VALUES('$title','$email','$requirements')";

        // save to db and check
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: index.php');
        } else {
            echo 'query error: '. mysqli_error($conn);
        }


    }

} // end POST check

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Product</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Product Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label>Requirements (comma separated)</label>
        <input type="text" name="requirements" value="<?php echo htmlspecialchars($requirements) ?>">
        <div class="red-text"><?php echo $errors['requirements']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>