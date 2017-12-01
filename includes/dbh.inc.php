<?php
  
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "root";
  $dbName = "ITS332";

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


  /**
   * connect with SQLiteDatabase
   */
   /*
  class dbh
  {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect() {
      $this->servername = "localhost";
      $this->username = "root";
      $this->password = "root";
      $this->dbname = "ITS332";

      $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return $conn;
    }
  }
  */
