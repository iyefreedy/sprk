<div class="form-wrapper">
     <form action="" method="post">
          <h1 class="form-caption">Form Peminjaman Ruangan</h1>
          <table align="center" class="form-table">
               <tr>
                    <td>Nama Peminjam</td>
                    <td>: <input class="form-input" type="text" name="name" id="name" disabled></td>
               </tr>
               <tr>
                    <td>Divisi</td>
                    <td>: <input class="form-input" type="text" name="divisi" id="divisi" disabled></td>
               </tr>
               <tr>
                    <td>Contact</td>
                    <td>: <input class="form-input" type="tel" name="contact" id="contact"></td>
               </tr>
               <tr>
                    <td>Nama Kegiatan</td>
                    <td>: <input class="form-input" type="text" name="nama_kegiatan" id="nama_kegiatan"></td>
               </tr>
               <tr>
                    <td>Jenis Kegiatan</td>
                    <td>: <select class="form-select" name="jenis_kegiatan" id="jenis_kegiatan">
                              <option value="Internal">Seminar</option>
                              <option value="Eksternal">Training</option>
                              <option value="Keduanya">Lomba</option>
                              <option value="Keduanya">Lainnya</option>
                         </select></td>
               </tr>
               <tr>
                    <td>Jenis Kegiatan</td>
                    <td>: <select class="form-select" name="pihak" id="pihak">
                              <option value="Internal">Internal</option>
                              <option value="Eksternal">Eksternal</option>
                              <option value="Keduanya">Keduanya</option>

                         </select></td>
               </tr>
               <tr>
                    <td>Tanggal Kegiatan</td>
                    <td>: <input class="form-input" type="datetime" name="awal_kegiatan" id="awal_kegiatan"> s/d</td>
                    <td>: <input class="form-input" type="datetime" name="akhir_kegiatan" id="akhir_kegiatan"></td>
               </tr>
               <tr>
                    <td>Nama Kegiatan</td>
                    <td>: <input class="form-input" type="text" name="jumlah_undangan" id="jumlah_undangan"></td>
               </tr>
               <tr>
                    <td>Ruang</td>
                    <td>: <select class="form-select" name="ruang" id="ruang">
                              <option value="">PILIH</option>
                              <option value="Selasar Lobby Luar - Lantai 1">Selasar Lobby Luar - Lantai 1</option>
                              <option value="Selasar Lobby Dalam - Lantai 1">Selasar Lobby Dalam - Lantai 1</option>
                              <option value="Serbaguna CIMB Niaga">Serbaguna CIMB Niaga</option>
                              <option value="Auditorium Arifin Panigoro">Auditorium Arifin Panigoro</option>
                              <option value="Selasar Auditorium - Lantai 3">Selasar Auditorium - Lantai 3</option>
                              <option value="Tenda Biru">Tenda Biru</option>
                         </select></td>
               </tr>
               <tr>
                    <td>Proposal</td>
                    <td>: <input class="form-input" type="file" name="proposal" id="proposal"></td>
               </tr>
               <tr>
                    <td colspan="2"></td>
               </tr>
          </table>
     </form>
     <input class="btn" type="submit" value="Submit">
</div>