<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Data Siswa</h3>
            <ul class="list-group">
                <?php foreach($data['siswa'] as $siswa) : ?>
                <li class="list-group-item d-flex justify-content-between"><?=$siswa['nama']?> 
                    <a href="<?=BASEURL?>/siswa/detail/<?=$siswa['id']?>" >Detail</a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>