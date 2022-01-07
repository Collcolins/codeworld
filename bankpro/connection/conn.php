<?php
$localhost ='localhost';
$username ='collcollins';
$password ='';
$database_name ='codeworld';

$conn = mysqli_connect($localhost,$username,$password,$database_name);
if (!$conn){
    die('not exit').mysqli_error()
}

?>
