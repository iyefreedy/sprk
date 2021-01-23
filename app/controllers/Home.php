<?php

class Home extends Controller
{
     public function __construct()
     {
          if (!isset($_SESSION['user'])) {
               Session::setFlash('Silahkan login terlebih dahulu', 'danger');
               header('Location:' . BASE_URL);
               exit;
          }
     }
     public function index()
     {
          $data = [
               'title' => 'Beranda - SPRK'
          ];

          $this->view('templates/header', $data);
          $this->view('templates/navbar');
          $this->view('home/index', $data);
          $this->view('templates/footer');
     }
}
