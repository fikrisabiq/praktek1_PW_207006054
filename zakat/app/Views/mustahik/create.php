<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Form Tambah Data Mustahik</h2>
<form action="/mustahik/save" method="post">
    <?= csrf_field(); ?>
    <div class="form-group row">
        <label for="nama_mustahik" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_mustahik" placeholder="nama mustahik" name="nama_kategori" autofocus required>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_hak" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="jumlah_hak" placeholder="jumlah tanggungan" name="jumlah_hak" min="1" max="8" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>