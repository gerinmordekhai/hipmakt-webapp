<!-- Tabel Daftar Hipma -->
<div class="tabel">
    <table>
        <h3>daftar pelajar dan mahasiswa</h3>
        <h1>kutai timur</h1>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">PT</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Email</th>
            <th scope="col">Region</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;

            foreach($listhipma as $row){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->pt; ?></td>
                    <td><?= $row->jurusan; ?></td>
                    <td><a class="email" href="<?= $row->email; ?>">View</a></td>
                    <td><?= $row->region; ?></td>
                    <td><?= $row->tahunmasuk; ?></td>
                    <td>
                        <a href="<?= base_url('daftarhipma/edit_data/'.$row->id); ?>"><button id="myBtn4">EDIT</button></a>
                        <button id="myBtn5">DELETE</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
