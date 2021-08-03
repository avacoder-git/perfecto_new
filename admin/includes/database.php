<?php

require_once ("new_config.php");

class Database{

    public $connection;


    public function   __construct()
    {

        $this->open_db_connection();;

    }


    public function open_db_connection()
    {

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->connection->connect_errno)
        {

            die("Database Error" );

        }

    }


    public function query($sql)
    {

        $result =  mysqli_query($this->connection, $sql);
        $this->confirm_query($result);

        return $result;

    }

    private function confirm_query($result)
    {

        if (!$result)
        {
            die("Query failed");

        }

    }

    public function escape_string($string)
    {

        $string = mysqli_escape_string($this->connection, $string);

        return $string;


    }




}

$database = new Database();




?>
