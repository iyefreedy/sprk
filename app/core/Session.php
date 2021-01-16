<?php

class Session
{

     public static function setFlash($message, $color)
     {
          $_SESSION['flash'] = [
               'message' => $message,
               'color' => $color
          ];
     }

     public static function flash()
     {
          if (isset($_SESSION['flash'])) {
               echo ' <div class="alert ' . $_SESSION['flash']['color'] . '">' . $_SESSION['flash']['message'] . '</div> ';
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
