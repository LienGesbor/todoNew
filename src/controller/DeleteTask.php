<?php

function DeleteTask($db)
{
    $TaskId = $_GET['id'];

    $stmt = $db->prepare(" DELETE FROM task where id=:TaskId ");
    
    $stmt->bindParam(":TaskId", $TaskId);

    $stmt->execute();
}

?>