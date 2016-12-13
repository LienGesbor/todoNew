<?php

function DeleteTask($db)
{
    echo "Delete";
    $sql = ' DELETE FROM task where id= 2 ';
    return $db->query($sql);
}

?>