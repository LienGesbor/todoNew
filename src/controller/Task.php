<?php

include_once('/home/daniel/dev/todo/src/model/db/DbConnect.php');


class Task
{

    private $dbHandler;

    function RetrieveTask()
    {

        $dbHandler = new DbConnect();

        $sql = 'SELECT * FROM task';
        return $dbHandler->query($sql);

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





}

?>