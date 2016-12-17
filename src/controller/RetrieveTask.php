<?php

//This function queries the selected database for todo items and their respective information.
//The database is passed as a parameter.
//The information from this function will be passed to todo/view/DisplayTask.php 

include_once("/home/daniel/dev/todo/src/model/db/DbConnect.php");

class RetrieveTask
{

    private $dbHandler;

    function RetrieveTask()
    {

        $dbHandler = new DbConnect();

        $sql = 'SELECT * FROM task';
        return $dbHandler->query($sql);

        $dbHandler->CloseConnection();

    }

}






?>