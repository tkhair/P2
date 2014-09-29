<?php

function PasswordGenerator($length) {
$CharactersArray='asdfghjklwertyuixcvbnm123456789'; //allowed characters
$pwd=''; //password variable
for ($n=1; $n &lt; $length; $n++) {
      $character = rand(1, strlen($CharactersArray)-1); //position of character to be taken from array is defined as random  between 1 and length of array minus 1
      $pwd .= $CharactersArray{$character}; //random character is added
   }
   return $pwd; //password is ready

}
?>