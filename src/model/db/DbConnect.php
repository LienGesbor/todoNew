<?php

// Connect to the database using PDO and MySQL
class dbConnect extends PDO
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
        parent::__construct('mysql:host=localhost;dbname=todo;', 'root', 'alexel', $this->opt);
        echo "Connected to Database";
    }


    function CloseConnection()
    {
        $this->DbConnection = null;
    }
}