<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="mb-4">Detail Muzakki</h2>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $muzakki['nama_muzakki']; ?></h5>
        <p class="card-text">Jumlah tanggungan : <?= $muzakki['jumlah_tanggungan']; ?></p>
        <h6 class="card-subtitle mb-2 text-muted">Keterangan : </h6>
        <p class="card-text"><?= $muzakki['keterangan']; ?></p>
        <a href="/mustahik" class="btn btn-success mt-3">Kembali ke daftar</a>
    </div>
</div>
<?= $this->endSection(); ?>