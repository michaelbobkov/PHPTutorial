<?php

//connect ot database
$connect = mysqli_connect('localhost', 'michael', '1234', 'test');

if(!$connect){
    echo 'Connection error: '.mysqli_connect_error();
}
$sql = 'SELECT title, requirements, id FROM products';
$result = mysqli_query($connect, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/head.php'); ?>

<body class="grey lighten-4">
<?php include('templates/header.php'); ?>
<h4 class="center grey-text">Products</h4>
<div class="container">
    <div class="row">
        <?php
        foreach ($products as $product) {  ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($product['title'])?></h6>
                        <ul>
                            <?php foreach (explode(',',$product['requirements']) as $item){?>
                                <li><?php echo htmlspecialchars($item) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="#">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>
<?php include('templates/footer.php'); ?>
</body>
</html>
