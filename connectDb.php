<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'login';

$connect = new mysqli($server, $user, $password,$database);
if(!$connect){
    die(mysqli_error($connect));
}else{

}
?>