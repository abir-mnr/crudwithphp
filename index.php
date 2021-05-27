<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <?php
        $query = 'SELECT * FROM products order by id desc';
        $stmt = $con->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Product List</h1>
        </div>
        <a href="create.php" class="btn btn-info" style="margin:20px; ">Add new product</a>
        <div class="container-fluid">
        <?php if($result != null){ ?>
            <table class="table table-striped">
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
                <?php
                   foreach($result as $row){
                        echo "<tr><td>{$row['name']}</td>";
                        echo "<td>{$row['description']}</td>";
                        echo "<td>{$row['price']}</td>";
                        echo "<td>
                            <a href='show.php?id={$row['id']}' class='btn btn-primary'>Show</a>
                            <a href='edit.php?id={$row['id']}' class='btn btn-success'>Edit</a>
                            <a onclick='delete_product({$row['id']})' class='btn btn-danger'>Delete</a>
                        </td></tr>";
                    }
                ?>
            </table>

        <?php }else{ echo "<div class='text-center'>No data found</div>" ;} ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>