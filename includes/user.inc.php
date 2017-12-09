<?php

/**
 * connect with SQLiteDatabase
 */
class User extends Dbh
{
  protected function getAllUSers() {
    //get information from Dbh
    $sql = "SELECT * FROM customer";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows; //how many result we got from the Dbh
    if ($numRows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row; //every data we got will be insert into the array
      }
      return $data; //got an array that we can pass on to the next class
    }
  }
}
