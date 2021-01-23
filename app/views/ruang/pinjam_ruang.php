<div class="form-wrapper">
     <div class="container">
          <?= Session::flash(); ?>
          <form action="<?= BASE_URL; ?>/ruang/pinjamruang" method="post" enctype="multipart/form-data">
               <table class="form-table">
                    <tr>
                         <td><label for="name" class="form-label">Nama Peminjam</label></td>
                         <td><input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" readonly value="<?= $_SESSION['user']['name']; ?>"></td>
                    </tr>
                    <tr>
                         <td><label for="divisi" class="form-label">Divisi</label></td>
                         <td><input type="text" class="form-control" id="divisi" name="divisi" readonly value="<?= $_SESSION['user']['divisi']; ?>"></td>
                    </tr>
                    <tr>
                         <td><label for=" contact" class="form-label">Kontak</label></td>
                         <td><input type="text" class="form-control" id="contact" name="contact" value="<?= $_SESSION['user']['contact']; ?>"></td>
                    </tr>
                    <tr>
                         <td><label for=" nama_kegiatan" class="form-label">Nama Kegiatan</label></td>
                         <td><textarea class="form-control" id="nama_kegiatan" name="nama_kegiatan"></textarea></td>
                    </tr>
                    <tr>
                         <td><label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label></td>
                         <td><select class="form-select" name="jenis_kegiatan" id="jenis_kegiatan">
                                   <option value="Rapat">Rapat</option>
                                   <option value="Seminar">Seminar</option>
                                   <option value="Workshop">Workshop</option>
                                   <option value="Training">Trainig</option>
                                   <option value="Lomba">Lomba</option>
                                   <option value="Lainnya">Lainnya</option>
                              </select></td>
                    </tr>
                    <tr>
                         <td><label for="waktu_kegiatan" class="form-label">Waktu Kegiatan</label></td>
                         <td><input type="text" class="form-control" id="datetimepicker-1" name="awal_kegiatan"></td>
                         <td><i>s/d</i></td>
                         <td><input type="text" class="form-control" id="datetimepicker-2" name="akhir_kegiatan"></td>
                    </tr>
                    <tr>
                         <td><label for="pihak" class="form-label">Melibatkan Pihak</label></td>
                         <td><select name="pihak" id="pihak" class="form-control">
                                   <option value="Internal">Internal</option>
                                   <option value="Eksternal">Eksternal</option>
                                   <option value="Internal & Eksternal">Internal & Eksternal</option>
                              </select></td>
                    </tr>
                    <tr>
                         <td><label for="undangan" class="form-label">Jumlah Undangan</label></td>
                         <td><input type="number" class="form-control" id="undangan" name="jumlah_undangan"></td>
                    </tr>
                    <tr>
                         <td><label for="ruang" class="form-label">Ruang</label></td>
                         <td><select name="ruang" id="ruang" class="form-select">
                                   <option value="">PILIH</option>
                                   <option value="Serbaguna CIMB Niaga">Serbaguna CIMB Niaga</option>
                                   <option value="Auditorium Arifin Panigoro">Auditorium Arifin Panigoro</option>
                                   <option value="Selasar Auditorium - Lantai 3"></option>
                              </select></td>
                    </tr>
                    <tr>
                         <td><label for="proposal" class="form-label">Proposal</label></td>
                         <td><input type="file" name="proposal" id="proposal" class="form-control"></td>
                    </tr>
                    <tr>
                         <td><input type="submit" value="Submit" class="btn"></td>
                    </tr>

               </table>
          </form>
     </div>
</div>