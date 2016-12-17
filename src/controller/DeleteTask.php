<?php

include_once('../model/db/DbConnect.php');

class DeleteTask
{
    private $dbHandler;

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