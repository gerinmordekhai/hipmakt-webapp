<!-- Modal Registrasi-->
<div id="modalRegis" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <h1>REGISTRASI</h1>
  <form method="POST" action="<?= base_url('daftarhipma/tambah_data'); ?>">
    <label for="nama">Nama</label><br>
    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap.."><br>
    
    <label for="status">Status</label><br>
    <input type="text" id="status" name="status" placeholder="Pelajar/Mahasiswa"><br>
    
    <label for="pt">PT</label><br>
    <input type="text" id="pt" name="pt" placeholder="Nama Sekolah/Perguruan Tinggi"><br>
    
    <label for="jurusan">Jurusan</label><br>
    <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan.."><br>
    
    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" placeholder="contoh123@gmail.com"><br>
    
    <label for="region">Region</label><br>
    <input type="text" id="region" name="region" placeholder="Nama Kota.."><br>
    
    <label for="tahunmasuk">Tahun Masuk</label><br>
    <input type="text" id="tahunmasuk" name="tahunmasuk" placeholder="Tahun Masuk.."><br>
    
    <button type="submit">REGISTRASI</button>
  </form>
</div>

</div>
</div>