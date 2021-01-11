<?php

class Home extends Controller
{
     public function index()
     {
          if (!isset($_SESSION['user'])) {
               Session::setFlash('Silahkan login terlebih dahulu');
               header('Location:' . BASE_URL);
               exit;
          }


          $data = [
               'title' => 'Beranda - SPRK'
          ];

          $this->view('templates/header', $data);
          $this->view('templates/navbar');
          $this->view('home/index', $data);
          $this->view('templates/footer');
     }
}
