<?php


class Ruang extends Controller
{
     public function index()
     {
          if (!isset($_SESSION['user'])) {
               Session::setFlash('Silahkan login terlebih dahulu', 'danger');
               header('Location:' . BASE_URL);
               exit;
          }

          $data = [

               'title' => 'Jadwal Ruangan'
          ];
          $this->view('templates/header', $data);
          $this->view('templates/navbar');
          $this->view('templates/topbar');
          $this->view('ruang/index');
          $this->view('templates/footer');
     }

     public function pinjamRuang()
     {
          $data = [
               'title' => 'Pinjam Ruang - SPRK'
          ];
          $this->view('templates/header', $data);
          $this->view('templates/navbar');
          $this->view('templates/topbar');
          $this->view('ruang/pinjam_ruang');
          $this->view('templates/footer');
     }
}
