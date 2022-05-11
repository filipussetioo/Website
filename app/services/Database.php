<?php

class Database
{
  protected $servername = DB_HOST;
  protected $username = DB_USER;
  protected $password = DB_PASS;
  protected $dbname = DB_NAME;

  protected $db_connection;

  public function __construct()
  {
  }

  public function openConnection()
  {
    $this->db_connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    if ($this->db_connection->connect_error) {
      die('Could not connect to' . $this->servername . 'server');
    }
  }

  public function executeSelectQuery($sql)
  {
    $this->openConnection();
    $query_result = $this->db_connection->query($sql);
    $result = [];
    if ($query_result && $query_result->num_rows > 0) {
      while ($row = $query_result->fetch_row()) {
        $result[] = $row;
      }
    }
    $this->closeConnection();
    return $result;
  }

  public function executeNonSelectQuery($sql)
  {
    $this->openConnection();
    $query_result = $this->db_connection->query($sql);
    $this->closeConnection();
    return $query_result;
  }

  public function closeConnection()
  {
    $this->db_connection->close();
  }

  public function escapeString($sql)
  {
    $this->openConnection();
    $escapedString = $this->db_connection->escape_string($sql);
    $this->closeConnection();
    return $escapedString;
  }
}
