<?php


class Ruang extends Controller
{
     public function index()
     {
          if (!isset($_SESSION['user'])) {
               Session::setFlash('Silahkan login terlebih dahulu');
               header('Location:' . BASE_URL);
               exit;
          }

          $data = [

               'title' => 'Jadwal Ruangan'
          ];
          $this->view('templates/header', $data);
          $this->view('templates/navbar');
          $this->view('ruang/index');
          $this->view('templates/footer');
     }
}
