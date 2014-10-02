<?php

function PasswordGenerator($length=5, $use_special=true, $use_numbers=true) 
{
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

if (isset($_POST['use_special']) && isset($_POST['use_numbers'])) $CharactersArray = 'abcdefghijklmnopqrstuwxyz1234567890!@#$%^&*()';
    else if (isset($_POST['use_special'])) $CharactersArray = 'abcdefghijklmnopqrstuwxyz1234567890';
    else if (isset($_POST['use_numbers'])) $CharactersArray = 'abcdefghijklmnopqrstuwxyz!@#$%^&*()';
    else $CharactersArray = 'abcdefghijklmnopqrstuwxyz';

   $length=isset($_POST['length']);
   $pwd = "";

    for ($n= 0; $n<$length; $n++)
    {
     $character = rand(0, strlen($CharactersArray)-1); //position of character to be taken from array is defined as random  between 1 and length of array minus 1
     $pwd .= $CharactersArray{$character}; //random character is added
   }
return $pwd; //password is ready
}
}
?>