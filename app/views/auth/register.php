<div class="form-wrapper">
     <div class="container">
          <h1>SPRK</h1>
          <p>Sistem Peminjaman Ruangan dan Kendaraan</p>
          <h3>Universitas Al-Azhar Indonesia</h3>
          <?php Session::flash(); ?>
          <form action="<?= BASE_URL; ?>/auth/signup" method="post">
               <div class="form-group">
                    <table>
                         <tr>
                              <td><label for="username" class="form-label">Username</label></td>
                              <td><input class="form-control" type="text" name="username" id="username"></td>
                         </tr>
                         <tr>
                              <td><label for="name" class="form-label">Full Name</label></td>
                              <td><input class="form-control" type="text" name="name" id="name"></td>
                         </tr>
                         <tr>
                              <td><label for="password" class="form-label">Password</label></td>
                              <td><input class="form-control" type="password" name="password" id="password"></td>
                         </tr>
                         <tr>
                              <td><label for="email" class="form-label">Email</label></td>
                              <td><input class="form-control" type="email" name="email" id="email"></td>
                         </tr>
                         <tr>
                              <td><label for="contact" class="form-label">Contact</label></td>
                              <td><input class="form-control" type="tel" name="contact" id="contact"></td>
                         </tr>
                         <tr>
                              <td><label for="divisi" class="form-label">Divisi</label></td>
                              <td><select class="form-select" name="divisi" id="divisi">
                                        <option value="">Divisi</option>
                                        <option value="Sekretariat Universitas">Sekretariat Universitas</option>
                                        <option value="LPPM">LPPM</option>
                                        <option value="BPMU">BPMU</option>
                                        <option value="Biro Akademik">Biro Akademik</option>
                                        <option value="Biro Keuangan">Biro Keuangan</option>
                                        <option value="Biro Kerjasama">Biro Kerjasama</option>
                                        <option value="Biro Sumber Daya Manusia">Biro Sumber Daya Manusia</option>
                                        <option value="Biro Pengembangan Akademik & Pembelajaran">Biro Pengembangan Akademik & Pembelajaran</option>
                                        <option value="Biro Kemahasiswaan & Alumni">Biro Kemahasiswaan & Alumni</option>
                                        <option value="Biro Penerimaan Mahasiswa Baru">Biro Penerimaan Mahasiswa Baru</option>
                                        <option value="Biro Promosi">Biro Promosi</option>
                                        <option value="Biro Pendukung Fasilitas">Biro Pendukung Fasilitas</option>
                                        <option value="Biro Perpustakaan">Biro Perpustakaan</option>
                                        <option value="Biro Inovasi">Biro Inovasi</option>
                                        <option value="Biro Manajemen">Biro Manajemen</option>
                                        <option value="Biro Etika Kebangsaan & Ke Al-Azhar an">Biro Etika Kebangsaan & Ke Al-Azhar an</option>
                                        <option value="Pusat Komputer & Sistem Informasi">Pusat Komputer & Sistem Informasi</option>
                                        <option value="Fakultas Pendidikan & Psikologi">Fakultas Pendidikan & Psikologi</option>
                                        <option value="Fakultas Sains & Teknologi">Fakultas Sains & Teknologi</option>
                                        <option value="Fakultas Ekomi & Bisnis">Fakultas Ekomi & Bisnis</option>
                                        <option value="Fakultas Ilmu Sosial & Ilmu Politik">Fakultas Ilmu Sosial & Ilmu Politik</option>
                                        <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
                                        <option value="Fakultas Hukum">Fakultas Hukum</option>
                                   </select></td>
                         </tr>
                         <tr>
                              <td><label for="level" class="form-label">Level</label></td>
                              <td><input class="form-control" type="text" name="level" id="level" placeholder="Level"></td>
                         </tr>
                    </table>
                    <input type="submit" class="btn" value="Register">
                    <p>Already have an Account ?<a href="<?= BASE_URL; ?>/" class="link"> Login here</a></p>
               </div>
          </form>


     </div>

</div>