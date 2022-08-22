<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>UPDATE</title>
</head>

<body>
    <?php
    include('configuration/config.php');
    $id = $_GET['id'];
    $up = mysqli_query($con, "select * from prod where id=$id");
    $data = mysqli_fetch_array($up);

    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2> OnlineShop</h2>
                <input type="text" name="name" autofocus value="<?php echo $data['name'] ?>">
                <br>
                <input type="text" name="price" value="<?php echo $data['price'] ?>">
                <br>
                <input type="file" name="image" id="file" style="display:none">
                <label for="file" name="image"> <i class="fa-solid fa-file-image"></i> Change image</label>
                <br><br>
                <button name="update" type="submit">Modify </button>
                <br><br>
                <a href="products.php">View all products </a>
            </form>
        </div>
        <footer>
            <p>Developer : <a href="#">Jasser Zouaidi</a></p>
        </footer>
    </center>

</body>

</html>