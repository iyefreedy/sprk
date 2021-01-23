<div class="form-wrapper">
     <div class="container auth">
          <h1>SPRK</h1>
          <p>Sistem Peminjaman Ruangan dan Kendaraan</p>
          <h3>Universitas Al-Azhar Indonesia</h3>

          <form action="<?= BASE_URL; ?>/auth/login" method="post">
               <div class="form-group">
                    <?php Session::flash(); ?>
                    <table>
                         <tr>
                              <td><label class="form-label" for="username">Username</label></td>
                              <td><input name="username" id="username" type="text" class="form-control"></td>
                         </tr>
                         <tr>
                              <td><label class="form-label" for="password">Password</label></td>
                              <td><input name="password" id="password" type="password" class="form-control"></td>
                         </tr>
                    </table>
                    <input class="btn" type="submit" value="Login">
                    <p>Not Registered ?<a href="<?= BASE_URL; ?>/auth/register"> Sign Up here</a></p>
               </div>
          </form>

     </div>
</div>