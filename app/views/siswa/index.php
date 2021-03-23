<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Siswa
            </button>
            <hr>
            <h3>Data Siswa</h3>
            <ul class="list-group">
                <?php foreach($data['siswa'] as $siswa) : ?>
                <li class="list-group-item d-flex justify-content-between"><?=$siswa['nama']?> 
                    
                    <a href="<?=BASEURL?>/siswa/detail/<?=$siswa['id']?>" ><span class="badge bg-primary">Detail</span></a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL?>/siswa/tambah" method="post">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama siswa..">
        </div>

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" placeholder="Nomor induk siswa..">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email siswa..">
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select class="form-select" id="kelas" name="kelas" >
                <option value="1">Satu</option>
                <option value="2">Dua</option>
                <option value="3">Tiga</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>