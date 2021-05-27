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
        if(isset($_POST) && $_POST != null) {
            $query = 'INSERT INTO products VALUES ("",:name,:description,:price,:comment)';
            $stmt = $con->prepare($query);
            $stmt->bindParam(':name',$_POST['name']);
            $stmt->bindParam(':description',$_POST['description']);
            $stmt->bindParam(':price',$_POST['price']);
            $stmt->bindParam(':comment',$_POST['comment']);
            $stmt->execute();
            header("Location: index.php?msg=Product created successfully");
        }
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Product Create</h1>
        </div>
        <a href="index.php" class="btn btn-info" style="margin:20px; ">Back</a>
        <div class="container-fluid">
            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="">
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <input type="text" class="form-control" name="comment" placeholder="">
                </div>
                <input type="submit" class="btn btn-primary" />
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>