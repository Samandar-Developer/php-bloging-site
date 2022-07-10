<?php
include "config/database.php";
$sql = 'SELECT * FROM blog';
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <table>
        <tr>
            <td>Name</td>
            <td>Date</td>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo "<a href='artical.php?id=${item['id']}'>". $item['title']."</a>"?></td>
                <td><?php echo $item["date"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="blog.php">Create Blog</a>
</body>

</html>