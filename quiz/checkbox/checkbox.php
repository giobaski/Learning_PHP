<?php
$quiz = [
    [
        'title' => 'შეკითხვა პირველი',
        'options' => ['პასუხი 1','პასუხი 2','პასუხი 3','პასუხი 4'],
        'answer' => [0,1],
    ],
    [
        'title' => 'შეკითხვა მეორე',
        'options' => ['პასუხი 1','პასუხი 2','პასუხი 3','პასუხი 4'],
        'answer' => [0,1],
    ],
    [
        'title' => 'შეკითხვა მესამე',
        'options' => ['პასუხი 1','პასუხი 2','პასუხი 3','პასუხი 4'],
        'answer' => [0,1],
    ],
    
];


if ($_SERVER['REQUEST_METHOD']=='POST'){
   
    $point = 0;
    foreach ($_POST['question'] as $questionsID => $option) {
        foreach ($option as $optionID=>$options) {
            if(in_array($options, $quiz[$questionsID]['answer'] ))
                {
                    $point +=0.5;
                } 
                else
                {
                    $point -=0.5;
                }
        }
    }
echo "your points are:" . $point;

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
    <form action="" method="post">
    
    <?php foreach($quiz as $questionID => $question): ?>
                
        <h2><?php echo $question['title']?></h2>   
                
            <?php foreach($question['options'] as $optionID => $option) : ?>
            <p>
            <label>
            <input type="checkbox" name="question[<?php echo $questionID; ?>][]" value="<?php echo $optionID; ?>"> <?php echo $option; ?>

            </label>
            </p>

        <?php endforeach; ?>
     <?php endforeach;?>


    <button type="submit">submit</button>    
        
    </form>    
</body>
</html>