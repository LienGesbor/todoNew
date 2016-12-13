<?php

function AddTask($db)
{
    $TaskName = $_POST['task_name'];
    $TaskDesc = $_POST['task_desc'];

    $sql = "INSERT INTO task (tskName, tskDesc) VALUES ('$TaskName', '$TaskDesc')";
            
    return $db->query($sql);
    
}

?>