<?php
if (isset($_POST["username"])){
    $name = $_POST["username"];
}

if (isset($_POST["mail"])){
    $mail = $_POST["mail"];
}
  
if (isset($_POST["textarea"])){
    $text = htmlspecialchars($_POST["textarea"]);
}

$file = fopen("./data.txt", "r");

if(fgets($file) == ''){
        // თუ პირველი ხაზი ცარიელია, მაშინ:      
        file_put_contents("./data.txt", "NAME:$name".PHP_EOL, FILE_APPEND);
        file_put_contents("./data.txt", "MAIL:$mail".PHP_EOL, FILE_APPEND);
        file_put_contents("./data.txt", "TEXT:$text".PHP_EOL, FILE_APPEND);
    } else {
        //თუ პირველი ხაზი ცარიელი არაა მაშინ:
        file_put_contents("./data.txt", "***".PHP_EOL, FILE_APPEND);
        file_put_contents("./data.txt", "NAME:$name".PHP_EOL, FILE_APPEND);
        file_put_contents("./data.txt", "MAIL:$mail".PHP_EOL, FILE_APPEND);
        file_put_contents("./data.txt", "TEXT:$text".PHP_EOL.PHP_EOL, FILE_APPEND);

}
    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>

  <body style="background-color:#05cc9e">

      <div class="container-fluid m-5">
          <div class="row">
              <div class="col d-flex justify-content-center">
                <form class="form-group mg-10" action="" method="post">
                      <input class="form-control" type="text" name="username" placeholder="username" required>
                                  
                      <input class="form-control" type="text" name="mail" placeholder="mail" required>                                       
                      
                      <textarea class="form-control" name="textarea" placeholder="write your text here" rows="3"></textarea> 
                                                                   
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
              </div>
            </div>
      </div>
                           
                               
             
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>