<div class="container">
    <div class="form-update">
        <div class="header">
            <span class="text-form">FORM</span>
            <span class="text-edit">REGISTRASI</span>
        </div>
        <div class="form-content">
            <div class="field-label">
                <div class="label-1"><label for="nama">Nama</label><br></div>
                <div class="label-2"><label for="status">Status</label><br></div>
                <div class="label-3"><label for="pt">PT</label><br></div>
                <div class="label-4"><label for="jurusan">Jurusan</label><br></div>
                <div class="label-5"><label for="email">Email</label><br></div>
                <div class="label-6"><label for="region">Region</label><br></div>
                <div class="label-7"><label for="tahunmasuk">Tahun Masuk</label><br></div>
            </div>

            <div class="field-form">
                <form method="POST" action="<?= base_url('daftarhipma/tambah_data'); ?>">
                    <div class="field">
                        <input type="text" id="nama" name="nama" ><br>
                        <input type="text" id="status" name="status" ><br>
                        <input type="text" id="pt" name="pt" ><br>
                        <input type="text" id="jurusan" name="jurusan" ><br>
                        <input type="text" id="email" name="email" ><br>
                        <input type="text" id="region" name="region" ><br>
                        <input type="text" id="tahunmasuk" name="tahunmasuk" ><br>
                    </div>
                    <button type="submit">REGISTRASI</button>
                </form>
            </div>
        </div>
    </div>
</div>


