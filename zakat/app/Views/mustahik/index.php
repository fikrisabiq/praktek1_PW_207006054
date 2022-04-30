<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Daftar Mustahik</h2>
<a href="/mustahik/create" class="btn btn-primary">Tambah Mustahik</a>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($mustahik as $m) :
        ?>
            <tr>
                <th scope="row"><?= ++$i; ?></th>
                <td><?= $m['nama_kategori']; ?></td>
                <td>
                    <a href="/mustahik/<?= $m['id_kategori']; ?>" class="btn btn-success">Detail</a>
                    <a href="/mustahik/edit/<?= $m['id_kategori']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/mustahik/<?= $m['id_kategori']; ?>" method="POST" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>