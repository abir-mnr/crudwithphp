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
        <?php
            if(isset($_GET['msg']) && $_GET['msg'] != null){
                echo "<div class='bg-success' style='padding:20px;'>{$_GET['msg']}</div>";
            } 
        ?>
        <a href="create.php" class="btn btn-info" style="margin:20px; ">Add new product</a>
        <div class="container-fluid">
        <?php if($result != null){ ?>
            <table class="table table-striped table-bordered">
                <th class="text-center">Name</th>
                <th class="text-center">Description</th>
                <th class="text-center">Price</th>
                <th class="text-center">Actions</th>
                <?php
                   foreach($result as $row){
                        echo "<tr><td class='text-center'>{$row['name']}</td>";
                        echo "<td class='text-center'>{$row['description']}</td>";
                        echo "<td class='text-center'>{$row['price']}</td>";
                        echo "<td class='text-center'>
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