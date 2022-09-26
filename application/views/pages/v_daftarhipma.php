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
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;

            foreach($listhipma as $row):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->pt; ?></td>
                    <td><?= $row->jurusan; ?></td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
