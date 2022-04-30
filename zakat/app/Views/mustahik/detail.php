<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="mb-4">Detail Mustahik</h2>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $muzakki['nama_kategori']; ?></h5>
        <p class="card-text">Jumlah hak : <?= $muzakki['jumlah_hak']; ?></p>
        <a href="/" class="btn btn-success mt-3">Kembali ke daftar</a>
    </div>
</div>
<?= $this->endSection(); ?>