<?php

include_once('..//src/model/db/DbConnect.php');

class Task
{

    private $dbHandler;

    function RetrieveTask()
    {
        //Changing query into prepared statement
        $dbHandler = new DbConnect();

        $stmt = $dbHandler->prepare("SELECT id, tskName, tskDesc FROM task");
        $stmt->execute();
        return $stmt;

        $dbHandler->CloseConnection();

    }
    
    function DeleteTask()
    {

        $dbHandler = new DbConnect();

        $TaskId = $_GET['id'];

        $stmt = $dbHandler->prepare(" DELETE FROM task where id=:TaskId ");
        
        $stmt->bindParam(":TaskId", $TaskId);

        $stmt->execute();

        $dbHandler->CloseConnection();
    }

    function AddTask()
    {

        $dbHandler = new DbConnect();
        $TaskName = $_POST['task_name'];
        $TaskDesc = $_POST['task_desc'];

        $stmt = $dbHandler->prepare ("INSERT INTO task (tskName, tskDesc) VALUES ('$TaskName', '$TaskDesc')");
        $stmt-> execute();

        $dbHandler->CloseConnection();
    
    }

}