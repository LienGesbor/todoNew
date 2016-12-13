<?php


function DeleteTask($db)
{
    $TaskId = $_GET['id'];
    $sql = " DELETE FROM task where id=$TaskId ";
    return $db->query($sql);
}

?>