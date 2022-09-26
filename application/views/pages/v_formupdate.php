<div class="container">
    <div class="form-update">
        <div class="header">
            <span class="text-form">FORM</span>
            <span class="text-edit">EDIT</span>
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
                <form method="POST" action="">
                    <div class="field">
                        <input type="text" id="nama" name="nama" value="<?= $hipma->nama; ?>"><br>
                        <input type="text" id="status" name="status" value="<?= $hipma->status; ?>"><br>
                        <input type="text" id="pt" name="pt" value="<?= $hipma->pt; ?>"><br>
                        <input type="text" id="jurusan" name="jurusan" value="<?= $hipma->jurusan; ?>"><br>
                        <input type="text" id="email" name="email" value="<?= $hipma->email; ?>"><br>
                        <input type="text" id="region" name="region" value="<?= $hipma->region; ?>"><br>
                        <input type="text" id="tahunmasuk" name="tahunmasuk" value="<?= $hipma->tahunmasuk; ?>"><br>
                    </div>
                    <button type="submit">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>


