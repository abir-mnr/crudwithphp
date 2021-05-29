<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <?php
        if(isset($_GET['id']) && $_GET['id']!=null){
            $query = "SELECT * FROM products where id={$_GET['id']}";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Product Details</h1>
        </div>
        <a href="index.php" class="btn btn-info" style="margin:20px; ">Back</a>
        <div class="container">
            <div class="form-group">
                <label for="name">Name</label>
                <input disabled value="<?php echo $result['name']?> "type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input disabled value="<?php echo $result['price']?>"type="number" class="form-control" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input disabled value="<?php echo $result['description']?> "type="text" class="form-control" name="description" placeholder="">
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <input disabled value="<?php echo $result['comment']?> "type="text" class="form-control" name="comment" placeholder="">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>