<?php

$product = null;
include ('config/db_connect.php');

if (isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql ="DELETE FROM products WHERE id=$id_to_delete";

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: index.php');
    }else{
        echo 'Query error:' . mysqli_error($conn);
    }
}

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql ="SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

}
?>

<!DOCTYPE html>
<html lang="en">
<?php include ('templates/header.php'); ?>

<h2>Details</h2>
<div class="container center">
    <?php if($product): ?>
        <h4><?php echo $product['title']; ?></h4>
        <p>Created by <?php echo $product['email']; ?></p>
        <p><?php echo date($product['created_at']); ?></p>
        <h5>Requirements:</h5>
        <p><?php echo $product['requirements']; ?></p>

        <!-- DELETE FORM -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $product['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>

    <?php else: ?>
        <h5>No such pizza exists.</h5>
    <?php endif ?>
</div>

<?php include ('templates/footer.php'); ?>

</html>