<?php

class Auth extends Controller
{
     public function index()
     {

          if (isset($_SESSION['user'])) {
               header('Location:' . BASE_URL . '/home');
          }

          $data = [
               'title' => 'Login - SPRK',
          ];

          $this->view('templates/header', $data);
          $this->view('auth/index', $data);
          $this->view('templates/footer');
     }

     public function register()
     {
          $data = [
               'title' => 'Register - SPRK',
          ];

          $this->view('templates/header', $data);
          $this->view('auth/register');
          $this->view('templates/footer');
     }

     // Private functon

     public function login()
     {
          if ($this->model('UserModel')->rows(['username' => $_POST['username']]) > 0) {
               $data = $this->model('UserModel')->find(['username' => $_POST['username']]);

               if (password_verify($_POST['password'], $data['password'])) {
                    $_SESSION['user'] = $data;
                    header('Location:' . BASE_URL . '/home');
               } else {
                    Session::setFlash('Password Salah');
                    header('Location:' . BASE_URL);
                    exit;
               }
          } else {
               Session::setFlash('Username ' . $_POST['username'] . ' tidak ditemukan');
               header('Location:' . BASE_URL);
               exit;
          }
     }

     public function signup()
     {
          $data = $_POST;


          if (!$this->model('UserModel')->rows(['username' => $data['username']]) > 0) {
               $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
               $data['role_id'] = 1;
               $data['token'] = base64_encode(random_bytes(32));
               $data['photo'] = 'user-image.jpg';
               if (!$this->model('UserModel')->insert($data)) {
                    Session::setFlash('Berhasil mendaftar');
                    header('Location:' . BASE_URL);
                    exit;
               } else {
                    Session::setFlash('Gagal mendaftar');
                    header('Location:' . BASE_URL);
                    exit;
               }
          } else {
               Session::setFlash('Username sudah terdaftar');
               header('Location:' . BASE_URL);
               exit;
          }
     }

     public function logout()
     {
          session_destroy();
          header('Location:' . BASE_URL);
          exit;
     }
}
