<?php

//This function queries the selected database for todo items and their respective information.
//The database is passed as a parameter.
//The information from this function will be passed to todo/view/DisplayTask.php 

function DeleteTask($db)
{
    $sql = 'DELETE FROM task WHERE id="3" ';
    echo "yes";
    
}

?>