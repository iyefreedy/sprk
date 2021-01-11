<?php

class UserModel
{
     private $table = 'user';
     private $db;


     public function __construct()
     {
          $this->db = new Database;
     }


     // Mencari data dan return jumlah data / baris
     public function rows($data)
     {
          $query = 'SELECT * FROM ' . $this->table . ' WHERE ';
          foreach ($data as $key => $value) {
               $query .= $key . '=' . ':' . $key;
          }

          $this->db->query($query);

          foreach ($data as $key => $value) {
               $this->db->bind($key, $value);
          }

          $this->db->execute();
          return $this->db->rowCount();
     }


     // Mencari data dan return semua data yang di temukan
     public function findAll($data)
     {
          $query = 'SELECT * FROM ' . $this->table . ' WHERE ';
          foreach ($data as $key => $value) {
               $query .= $key . '=' . ':' . $key;
          }

          $this->db->query($query);

          foreach ($data as $key => $value) {
               $this->db->bind($key, $value);
          }

          $this->db->execute();
          return $this->db->resultSet();
     }

     // Mencari data dan return data yang sesuai dengan kondisi
     public function find($data)
     {
          $query = 'SELECT * FROM ' . $this->table . ' WHERE ';
          foreach ($data as $key => $value) {
               $query .= $key . '=' . ':' . $key;
          }

          $this->db->query($query);

          foreach ($data as $key => $value) {
               $this->db->bind($key, $value);
          }

          $this->db->execute();
          return $this->db->single();
     }
}
