<?php

class UserModel
{
     private $table = 'user';
     private $db;


     public function __construct()
     {
          $this->db = new Database;
     }


     // Find data and return number of rows
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
     public function findAll()
     {
          $query = 'SELECT * FROM ' . $this->table;

          $this->db->query($query);

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

     public function insert($data)
     {
          $query = 'INSERT INTO ' . $this->table . '(';
          foreach ($data as $key => $value) {
               $query .= $key . ',';
          }
          $query = substr($query, 0, -1);
          $query .= ') VALUES (';

          foreach ($data as $key => $value) {
               $query .= ":$key,";
          }

          $query = substr($query, 0, -1);
          $query .= ')';
          $this->db->query($query);

          foreach ($data as $key => $value) {
               $this->db->bind($key, $value);
          }

          return $this->db->execute() ? true : false;
     }
}
