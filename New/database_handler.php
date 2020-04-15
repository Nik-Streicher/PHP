<?php

class database_handler
{
    function connect()
    {
        $connection = mysqli_connect('localhost', 'root', '**********', 'php_users');
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }


    function insert($name, $password)
    {
        $connection = $this->connect();
        $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }


    function check($name, $password)
    {
        $connection = $this->connect();
        $sql = "SELECT users.name,users.password FROM users WHERE name LIKE '$name' AND password LIKE '$password'";
        $include = mysqli_num_rows(mysqli_query($connection, $sql));
        return $include > 0;
    }

}