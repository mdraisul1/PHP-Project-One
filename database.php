<?php
//mysql database connect
// $db_connection = 'mysql';
// $db_host = 'localhost';
// $db_database = 'raisul';
// $db_user = 'root';
// $db_password = 'password';
// $dsn = "$db_connection:dbname=$db_database;host=$db_host";

// $db = new PDO($dsn, $db_user, $db_password);

/**
 * mysql database connection query;
 * oop php database class;
 */
//database connection and mysql query
class Database
{
    public $connection;
    public function __construct($config, $username = 'root', $password = 'password'){
       
        $dns = 'mysql:' . http_build_query($config,'',';');

        $this->connection = new PDO($dns, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    /**
     * Executes a sql query and return the statement 
     *
     * @param string $query the sql query execute
     * @return PDOstatement the execute statement
     */
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}
