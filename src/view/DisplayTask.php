<?php

//Include the RetrieveTask function to obtain Todo List database query information.
//This function will be used to display the corresponding todo list item, and its delete button.
//All the will need be called on index.php will be: DisplayTask($SELECTED_DATABASE)

include_once("/home/daniel/dev/todo/src/controller/Task.php");


  function DisplayTask()
    {
        $Task = new Task();
        
         foreach ($Task->RetrieveTask() as $row)
        {
            echo "<li>" . $row['tskName'] . "<br>" . $row['tskDesc'] . "<a id=".$row['id']." class='btn btn-danger' href='/todo/redir/DeleteAndReturn.php?id=".$row['id']."'>Delete</a>" . "</li>";
        }
    }

?>