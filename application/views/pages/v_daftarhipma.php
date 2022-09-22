<!-- Tabel Daftar Hipma -->
<div class="tabel">
    <table>
        <h3>daftar pelajar dan mahasiswa</h3>
        <h1>kutai timur</h1>
        <thead>
            <tr>
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
            foreach($listhipma as $row){
                ?>
                <tr>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->pt; ?></td>
                    <td><?= $row->jurusan; ?></td>
                    <td><?= $row->email; ?></td>
                    <td><?= $row->region; ?></td>
                    <td><?= $row->tahunmasuk; ?></td>
                    <td>
                        <button id="myBtn4">UPDATE</button>
                        <button id="myBtn5">DELETE</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
