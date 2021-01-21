<div class="dashboard-wrapper">
     <div class="container">
          <a href="" class="btn primary edit-profile"><i class="fa fa-user-edit fa-lg fa-fw"></i> Edit Profile</a>
          <img src="<?= BASE_URL; ?>/img/user-image.jpg" alt="" class="user-image">
          <div class="detail">
               <table>
                    <tr>
                         <td>Nama</td>
                         <td><?= $_SESSION['user']['name']; ?></td>
                    </tr>
                    <tr>
                         <td>Email</td>
                         <td><?= $_SESSION['user']['email']; ?></td>
                    </tr>
                    <tr>
                         <td>Role</td>
                         <td><?= $_SESSION['user']['level']; ?></td>
                    </tr>
                    <tr>
                         <td>Dir/Unit/Fak</td>
                         <td><?= $_SESSION['user']['divisi']; ?></td>
                    </tr>
               </table>
          </div>
     </div>

</div>