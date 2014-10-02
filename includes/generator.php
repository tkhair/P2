<?php

$length = $_POST['length'];
$use_special = $_POST['use_special'];
$use_numbers = $_POST['use_numbers'];

function PasswordGenerator($length,$use_special,$use_numbers){
  $pwd = "";

  if (!$length)
    $length = 10; //default value

  if ( $use_special && $use_numbers )
    $CharactersArray = 'abcdefghijklmnopqrstuwxyz1234567890!@#$%^&*()';
  else if ( $use_special )
    $CharactersArray = 'abcdefghijklmnopqrstuwxyz!@#$%^&*()';
  else if ( $use_numbers )
    $CharactersArray = 'abcdefghijklmnopqrstuwxyz1234567890';
  else
    $CharactersArray = 'abcdefghijklmnopqrstuwxyz';

  for ($n = 0; $n < $length; $n++){
    $character = rand(1, strlen($CharactersArray)-1); //position of character to be taken from array is defined as random  between 1 and length of array minus 1
    $pwd .= $CharactersArray{$character}; //random character is added
  }
  return $pwd; //password is ready
}

echo PasswordGenerator($length,$use_special,$use_numbers);

?>