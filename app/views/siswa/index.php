<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Data Siswa</h3>
                <?php foreach($data['siswa'] as $siswa) : ?>
            <ul>
                <li><?=$siswa['nama']?></li>
                <li><?=$siswa['nis']?></li>
                <li><?=$siswa['email']?></li>
                <li><?=$siswa['kelas']?></li>
            </ul>
                <?php endforeach ?>
        </div>
    </div>
</div>