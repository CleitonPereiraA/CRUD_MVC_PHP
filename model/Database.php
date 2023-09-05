<?php

class Database {
    private string $serverName;
    private string $userName;
    private string $password;
    private string $dbName;
    private mysqli $connection;

    public function __construct()
    {
        $this->serverName = "db"; 
        $this->userName = "root"; 
        $this->password = "1q2w3e4r5t";
        $this->dbName = "pw_exemple"; 
    }

    public function closeConnection()
    {
        $this->connection = new mysqli(
            $this->serverName,
            $this->userName,
            $this->password, 
            $this->dbName
        );
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function openConnection()
    {
        $this->connection = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }


    public function executeSelect(string $sql): array
    {
        $this->openConnection();
        $result = $this->connection->query($sql);

        $arrayResults = [];
        while($row = $result->fetch_assoc()){
            array_push($arrayResults, $row);
        }
        $this->connection->close();
        return $arrayResults;
    }

    public function insert(string $sql) 
    {
        $this->openConnection();
        $result = $this->connection->query($sql);
        $this->connection->close();
    }
    
}