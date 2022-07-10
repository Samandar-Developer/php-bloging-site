<?php
include "config/database.php";
if(isset($_GET["id"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    // $id = $_GET["id"];
    $sql = "SELECT * FROM blog WHERE id=$id";
    $result = mysqli_query($conn, $sql) or die("Bad query: ${sql}");
    $data = mysqli_fetch_array($result, MYSQLI_BOTH);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="blog-body">
        <h2><?php echo $data["title"];?></h2>
        <p><?php echo $data["description"];?></p>
    </div>
</body>

</html>