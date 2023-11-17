<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ninja Pizza</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cb3455 !important;
        }
        .brand-text{
            color: #39dd55 !important;
        }
    </style>
</head>
<body class="grey lighten-4">
<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h3 class="center"></h3>
    <form>
        <label for="email">Your Email:</label>
        <input type="text" id="email">
        <label for="title">Title:</label>
        <input type="text" id="title">
        <label for="requirements">Requirements:</label>
        <input type="text" id="requirements">
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>


<?php include('templates/footer.php'); ?>
</body>
</html>
