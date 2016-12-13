<?php

// Connect to the database using PDO and MySQL
class DbConnect extends PDO
{
    protected $dsn        = "mysql:host=localhost;dbname=todo;";
    protected $dbPassword = 'alexel';
    protected $dbUsrName  = 'root';

    protected $opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    

     function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=todo;', 'root', 'alexel', array ('$opt'));
    }


    function closeConnection()
    {
        $this->DbConnection = null;
    }
}
?>