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

               if ($_POST['password'] == $data['password']) {
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

     public function logout()
     {
          session_destroy();
          header('Location:' . BASE_URL);
          exit;
     }
}
