
<?php
include_once("../src/controller/Task.php");
include_once("../src/model/db/DbConnect.php");
include_once("../src/controller/ReturnToIndex.php");

ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

$Task = new Task();
$ReturnClass = new ReturnToIndex();

$Task->AddTask();

$ReturnClass->ReturnToIndex();