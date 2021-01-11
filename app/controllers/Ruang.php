<?php


class Ruang extends Controller
{
     public function index()
     {
          $data = [

               'title' => 'Jadwal Ruangan'
          ];
          $this->view('templates/header', $data);
          $this->view('templates/navbar');
          $this->view('ruang/index');
          $this->view('templates/footer');
     }
}
