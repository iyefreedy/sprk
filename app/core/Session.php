<?php

class Session
{

     public static function setFlash($message)
     {
          $_SESSION['flash'] = [
               'message' => $message,
          ];
     }

     public static function flash()
     {
          if (isset($_SESSION['flash'])) {
               echo ' <div class="alert">' . $_SESSION['flash']['message'] . '</div> ';
          }
          unset($_SESSION['flash']);
     }

     public static function setData($data)
     {
          $_SESSION['user'] = $data;
     }

     public static function data()
     {
     }
}
