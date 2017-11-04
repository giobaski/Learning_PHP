<?php
$quiz = [
    [
        'title' => 'შეკითხვა პირველი',
        'options' => ['პასუხი 1','პასუხი 2','პასუხი 3','პასუხი 4'],
        'answer' => 2
    ],
    [
        'title' => 'შეკითხვა მეორე',
        'options' => ['პასუხი 1','პასუხი 2','პასუხი 3','პასუხი 4'],
        'answer' => 2
    ],
    [
        'title' => 'შეკითხვა მესამე',
        'options' => ['პასუხი 1','პასუხი 2','პასუხი 3','პასუხი 4'],
        'answer' => 2
    ],
    
]


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
    <form action="" method="post">
    
    <?php foreach($quiz as $questionID => $question): ?>
        <h2><?php echo $question['title']?></h2>   

            <?php foreach($question['options'] as $optionID => $option) : ?>
            <p>
            <label>
            <input type="radio" name="question[<?php echo $questionID; ?>]" value="<?php echo $option; ?>"> <?php echo $option; ?>

            </label>
            </p>

        <?php endforeach; ?>
    <?php endforeach;?>


    <button type="submit">submit</button>    
        
    </form>    
</body>
</html>