<?php

//Include the RetrieveTask function to obtain Todo List database query information.$_COOKIE
//This function will be used to display the corresponding todo list item, and its delete button.$_COOKIE
//All the will need be called on index.php will be: DisplayTask($SELECTED_DATABASE)

include_once("./controller/RetrieveTask.php");

  function DisplayTask($db)
    {
         foreach (RetrieveTask($db) as $row)
        {
            echo "<li>" . $row['tsk-name'] . "<br>" . $row['tsk-desc'] . "<a id=".$row['id']." class='btn btn-danger' href='./controller/DeleteTask.php'>Delete</a>" . "</li>";
        }
    }

?>