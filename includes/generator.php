<?php

$length = $_POST['length'];
$use_special = $_POST['use_special'];
$use_numbers = $_POST['use_numbers'];

function PasswordGenerator($length,$use_special,$use_numbers){
  $pwd = ""; //password variable
  $words=""; //array of words

  if (!$length)
    $length = 3; //default length of password
 
	$words = file_get_contents('./words.txt');  //open the dictionary
	for ($n = 0; $n < $length; $n++){
		$temp = explode(',',$words); //break the dictionary string 
		$pwd .= $temp[array_rand($temp)];  //add to pwd random word
		}

	  if ( $use_special && $use_numbers )
	    $CharactersArray = '1234567890!@#$%^&*()'; 
	  else if ( $use_special )
	    $CharactersArray = '!@#$%^&*()';
	  else if ( $use_numbers )
	    $CharactersArray = '1234567890';


  for ($n = 0; $n < $length; $n++){
    $character = rand(1, strlen($CharactersArray)-1); //position of character to be taken from array is defined as random  between 1 and length of array minus 1
    $pwd .= $CharactersArray{$character}; //random character is added
  }
  return $pwd; //password is ready
}

echo PasswordGenerator($length,$use_special,$use_numbers);
?>