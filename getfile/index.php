<?php

if($_SERVER["REQUEST_METHOD"] = "POST"){

    foreach ($_FILES['image']['tmp_name'] as $key => $tmpname) {
        $filename = $tmpname;
        $originalName = $_FILES['image']['name'][$key];
        move_uploaded_file($filename, "./uploads/.$originalName");
    }


    // var_dump($_FILES);
    // $filename = $_FILES['image']['tmp_name'];
    // $originalName = $_FILES['image']['name'];
    // move_uploaded_file($filename, "./uploads/.$originalName");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" value="">
        <input type="file" name="image[]" value="">
        <input type="file" name="image[]" value="">
        <button>submit</button>
    </form>

</body>
</html>