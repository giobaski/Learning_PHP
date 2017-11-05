<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php if(!isset($_COOKIE['popup'])):?>
    <div id="popup">
        <p>ძალიან მნიშვნელოვანი შეტყობინების ტექსტი</p>
        <a href='./setcookie.php'>დახურვა</a>
    </div>
    <?php endif ?>

    <p>დავუშვათ გვაქვს საიტი, რომელზე შესვლის შემთხვევაშიც ავტომატურად გამოდის რაღაც საინფორმაციო მესიჯი (პოპაპი). 
    თუ მომხმარებელი დახურავს ამ მესიჯს, პოპაპი აღარ უნდა გამოჩნდეს 24 საათის განმავლობაში (მხოლოდ ამ მომხმარებელთან). 
    დაწერეთ პროგრამა, რომელიც პოპაპის დახურვის შემთხვევაში შექმნის 24 საათიან cookie-ს მომხმარებლის კომპიუტერში და 
    ასევე პოპაპის გამოტანამდე შეამოწმებს არსებობს თუ არა ასეთი cookie.
    </p>
</body>
</html>


