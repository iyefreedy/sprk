<div class="form-user">
     <h1>SPRK</h1>
     <?php Session::flash(); ?>
     <form action="<?= BASE_URL; ?>/auth/signup" method="post">
          <div class="form-input">
               <input type="text" name="username" id="username" placeholder="Username">
          </div>

          <div class="form-input">
               <input type="text" name="name" id="name" placeholder="Full Name">
          </div>

          <div class="form-input">
               <input type="password" name="password" id="password" placeholder="Password">
          </div>

          <div class="form-input">
               <input type="email" name="email" id="email" placeholder="Email">
          </div>

          <div class="form-input">
               <input type="tel" name="contact" id="contact" placeholder="Phone number">
          </div>

          <div class="form-input">
               <select name="divisi" id="divisi">
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
               </select>
          </div>

          <div class="form-input">
               <input type="text" name="level" id="level" placeholder="Level">
          </div>

          <div class="form-input">
               <input type="submit" class="btn" value="Register">
          </div>
     </form>

     <a href="<?= BASE_URL; ?>/" class="link">Already have an Account ? Login here</a>
</div>