
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

include_once("./model/db/DbConnect.php");
include_once("./controller/RetrieveTask.php");
include_once("./controller/DeleteTask.php");
include_once("./view/DisplayTask.php");

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
                        DisplayTask($dbHandle);
                        DeleteTask($dbHandle);
                    ?>
               </ul>
           </div>
       </div>
        
    </body>
</html>