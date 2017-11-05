<?php
include 'quiz.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $point = 0;

        foreach ($_POST['question'] as $questionIndex => $questionValue) :
            if($quiz[$questionIndex]['answer'] == $questionValue){
                $point +=1;
            }
            
        endforeach;

echo "your point is: " . $point;
}
?>