<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/style3.css">
    <title>PRODUCT</title>
</head>

<body>

    <div class="cont">

        <?php
        include('configuration/config.php');
        $result = mysqli_query($con, "SELECT * FROM prod");
        while ($row = mysqli_fetch_array($result)) {
            echo "
            <div class='card'>
                <img src='$row[image]' >
                <div>
                    <h4 class='card-title'>$row[name]</h4>
                    <h5 class='card-text'>$row[price]</h5>
                    <a href='update.php? id=$row[id]' class='btn btn-edit'>Modify</a>
                    <a href='delete.php? id=$row[id]' class='btn btn-delete'>Delete</a>
                </div>
            </div>
    ";
        }
        ?>

    </div>




</body>

</html>