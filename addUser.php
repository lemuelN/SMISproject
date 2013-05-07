<?php

include 'classes/functions.php';

$username = $_POST['username'];
$fName = $_POST['fullname'];
$pw = $_POST['password'];
$type = $_POST['type'];

$addUser = new sqlfunction();
$addUser->addUser($username,$fName,$pw,$type);