<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config)
    {
        $username = $config['username'] ?? "root";
        $password = $config['password'] ?? "";

        // Create the DSN string through sprintf() function. you can use this method also.
        // $dsn = sprintf(
        //     'mysql:host=%s;dbname=%s;charset=%s',
        //     $config['host'],
        //     $config['dbname'],
        //     $config['charset']
        // );

        // Create the DSN string through http_build_query() function. you can use one of them.
        // $dsn = "mysql:" . http_build_query($config, '', ';');
        $dsn = 'mysql:' . http_build_query([
            'host' => $config['host'],
            'dbname' => $config['dbname'],
            'charset' => $config['charset'],
        ], '', ';');

        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connection successfully";
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
