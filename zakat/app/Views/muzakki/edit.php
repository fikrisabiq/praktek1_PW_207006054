<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Form Edit Data Muzakki</h2>
<form action="/muzakki/update/<?= $muzakki['id_muzakki']; ?>" method="post">
    <?= csrf_field(); ?>
    <div class="form-group row">
        <label for="nama_muzakki" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_muzakki" placeholder="nama muzakki" name="nama_muzakki" autofocus required value="<?= $muzakki['nama_muzakki']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_tanggungan" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="jumlah_tanggungan" placeholder="jumlah tanggungan" name="jumlah_tanggungan" min="1" required value="<?= $muzakki['jumlah_tanggungan']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="keterangan" placeholder="keterangan" name="keterangan" min="1" required value="<?= $muzakki['keterangan']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>