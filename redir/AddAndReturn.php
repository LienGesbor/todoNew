<?php
include_once("../src/controller/AddTask.php");
include_once("../src/model/db/DbConnect.php");
include_once("../src/controller/ReturnToIndex.php");

ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

$DbHandler = new DbConnect();

AddTask($DbHandler);

$DbHandler->CloseConnection();

ReturnToIndex();
?>