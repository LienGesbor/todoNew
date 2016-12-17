
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

include_once("../src/model/db/DbConnect.php");
include_once("../src/controller/RetrieveTask.php");
include_once("../src/view/DisplayTask.php");

$dbHandle = new DbConnect();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.theme.min.css" rel="stylesheet">
    </head>
    <body>
       <div class="container main_wrapper">
           <div class="row sub_wrapper">
               <ul>
                    <?php
                        DisplayTask();
                    ?>
               </ul>
               <form action="/todo/redir/AddAndReturn.php" method="post">
                   <input type="text" name="task_name" placeholder="Task Name">
                   <input type="text" name="task_desc" placeholder="Task Description">
                   <input type="submit">
               </form>
           </div>
       </div>
        
    </body>
</html>
