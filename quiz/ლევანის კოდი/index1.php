<?php
  $quizz = [
    [
      'title' => 'შეკითხვის სათაური 1?',
      'options' => [
        'პასუხი 1', 'პასუხი 2', 'პასუხი 3', 'პასუხი 4'
      ],
      'correct_option' => [1, 2]
    ],
    [
      'title' => 'შეკითხვის სათაური 2?',
      'options' => [
        'პასუხი 1', 'პასუხი 2', 'პასუხი 3', 'პასუხი 4'
      ],
      'correct_option' => [1]
    ],
    [
      'title' => 'შეკითხვის სათაური 3?',
      'options' => [
        'პასუხი 1', 'პასუხი 2', 'პასუხი 3', 'პასუხი 4'
      ],
      'correct_option' => [2, 3]
    ]
  ];

  if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
  {
    $points = 0;
    
    foreach ( $_POST['question'] as $questionId => $optionIds )
    {
      foreach ($optionIds as $optionId)
      {
        if ( in_array($optionId, $quizz[$questionId]['correct_option']) )
        {
          $points += 0.5;
        }
        else
        {
          $points -= 0.5;
        }
      }
    }

    echo 'Correct options: ' . $points;
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

    <?php foreach ($quizz as $questionId => $question) : ?>
    
    <h4><?= $question['title'] ?></h4>
    
    <?php foreach ( $question['options'] as $optionId => $option ) : ?>
    <p>
      <label>
      <input type="checkbox" name="question[<?=$questionId?>][]" value="<?=$optionId?>"> <?= $option ?>
      </label>
    </p>
    <?php endforeach; ?>

    <?php endforeach; ?>

    <button type="submit">Submit</button>
  </form>

</body>
</html>