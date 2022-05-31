<div class="col-md-12">
    <h3>
        Daftar Mata Kuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mk as $mk) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mk->nama_matkul ?></td>
                    <td><?= $mk->sks ?></td>
                    <td><?= $mk->dosen ?></td>
                    <td><?= $mk->kode  ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>