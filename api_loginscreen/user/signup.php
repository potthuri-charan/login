<?php

include '../connection.php';

//POST-Send/safe date to mysql db 
//GET-retrive the data fron the sql db

$userName = $_POST['user_name'];
$userEmail = $_POST['user_email'];
$userPassword = md5($_POST['user_password']);

$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_email = '$userEmail', user_password = '$userPassword'";

$resultofQuery = $connectNow->query($sqlQuery);

if($resultofQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}
