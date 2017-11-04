<?php


$fields = [
	['type' => 'text', 
	'name' => 'username', 
	'value' => 'test'],

	['type' => 'text', 
	'name' => 'email', 
	'value' => ''],

	['type' => 'password', 
	'name' => 'password', 
	'value' => ''],

	['type' => 'select',
	'name' => 'gender',
	'options' => [
			['value' => 'male', 
			'text' => 'Male'],

			['value' => 'female', 
			'text' => 'Female']
		]
	],

];





echo "<form>";
for ($i=0; $i < count($fields) ; $i++) { 
	
		if($fields[$i]['type'] == 'select'){
			echo "<div>";
			echo "<select name=" . $fields[$i]['name'] . ">";
				for ($j=0; $j < count($fields[$i]['options']); $j++) { 
					echo "<option value=" . $fields[$i]['options'][$j]['value'] . ">". $fields[$i]['options'][$j]['text'] . " </option>" ;
				}
			echo " </select></div>";


		} else{
			echo "<div><input type=" . $fields[$i]['type']. " name=" . $fields[0]['name'] . " value=" . $fields[0]['value'] . "></div>";
		}
   

}
echo "</form>";  



?>