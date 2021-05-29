<?php include 'config/database.php'; ?>
<?php
    if(isset($_GET['id']) && $_GET['id']!=null){
        $query = "DELETE FROM products where id={$_GET['id']}";
        $stmt = $con->prepare($query);
        $stmt->execute();
        header("Location: index.php?msg=Product deleted successfully");
    }
?>