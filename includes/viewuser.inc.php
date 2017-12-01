<?php

/**
 * connect with SQLiteDatabase
 */
class ViewUser extends User
{
  public function showAllUSers() {
    $datas = $this->getAllUSers();
    foreach ($datas as $data) {
      echo $data['uid']."<br>";
      echo $data['pwd']."<br>";
    }
  }
}
