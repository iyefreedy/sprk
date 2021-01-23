<?php


class Ruang extends Controller
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

          if (!empty($_POST)) {
               $data_post = $_POST;
               $data_post['id_peminjam'] = $_SESSION['user']['id'];
               if (file_exists($_FILES['proposal']['tmp_name']) || is_uploaded_file($_FILES['proposal']['tmp_name'])) {
                    $tempfile = $_FILES['proposal']['tmp_name'];
                    $filename = $_FILES['proposal']['name'];
                    $data_post['proposal'] = $filename;
                    $this->model('RuangModel')->insert($data_post);
                    move_uploaded_file($tempfile, 'proposal/' . $filename);
                    Session::setFlash('Data berhasil di input', 'success');
                    header('Location:' . BASE_URL . '/ruang/pinjamruang');
                    exit;
               } else {
                    $this->model('RuangModel')->insert($data_post);
                    Session::setFlash('Data berhasil di input', 'success');
                    header('Location:' . BASE_URL . '/ruang/pinjamruang');
                    exit;
               }
          } else {
               $this->view('templates/header', $data);
               $this->view('templates/navbar');
               $this->view('templates/topbar');
               $this->view('ruang/pinjam_ruang');
               $this->view('templates/footer');
          }
     }
}
