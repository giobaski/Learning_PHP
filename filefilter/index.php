<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    foreach ($_FILES['image']['tmp_name'] as $key => $tmpname) {
        $filename = $tmpname;
        $originalName = $_FILES['image']['name'][$key];

            if($_FILES['image']['type'][$key] == 'image/jpeg'){
              move_uploaded_file($filename, "./images/jpg/.$originalName");

            } elseif($_FILES['image']['type'][$key] == 'image/png'){
                    move_uploaded_file($filename, "./images/png/.$originalName");
            } elseif($_FILES['image']['type'][$key] == 'image/gif'){
                    move_uploaded_file($filename, "./images/gif/.$originalName");
            }
            else{
                move_uploaded_file($filename, "./uploads/.$originalName");
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