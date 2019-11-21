<?php
$input = $_POST['angka']; 

if($input == strrev($input))
{
    echo $input." adalah palindrom";
}
else
{
    echo $input." bukan palindrom";
}
?>