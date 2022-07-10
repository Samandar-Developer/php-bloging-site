<?php
include "config/database.php";
if(isset($_POST["submit"])){
    $title = $description = "";
    $message;
    if(!empty($_POST["title"])){
        $title =  filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $message = "Title Required";
    }
    if(!empty($_POST["description"])){
        $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
        $message = "Description Required";
    }
    if(empty($message)){
        $sql = "INSERT INTO blog (title, description) VALUES('$title', '$description')";
        if(mysqli_query($conn, $sql)){
            header("Location:index.php");
        }else{
            $message = "Error";
        }
    }
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
    <div class="home"><a href="index.php">Home</a></div>
    <?php echo $message ?? null; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="input">
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div class="input">
        <label for="description">Description</label>
        <textarea name="description"cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="Submit" name="submit">


    </form>
    <div class="content">
        
    </div>
</body>

</html>