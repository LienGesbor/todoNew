<?php

//This function queries the selected database for todo items and their respective information.
//The database is passed as a parameter.
//The information from this function will be passed to todo/view/DisplayTask.php 
include_once('../src/model/db/DbConnect.php');
include_once('../src/controller/Task.php');
include_once('../src/controller/ReturnToIndex.php');


$Task = new Task();
$ReturnClass = new ReturnToIndex();

$Task->DeleteTask();

$ReturnClass->ReturnToIndex();

?>