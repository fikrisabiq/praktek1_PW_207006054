<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Daftar Muzakki</h2>
<a href="/muzakki/create" class="btn btn-primary">Tambah Muzakki</a>
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
        foreach ($muzakki as $m) :
        ?>
            <tr>
                <th scope="row"><?= ++$i; ?></th>
                <td><?= $m['nama_muzakki']; ?></td>
                <td>
                    <a href="/muzakki/<?= $m['id_muzakki']; ?>" class="btn btn-success">Detail</a>
                    <a href="/muzakki/edit/<?= $m['id_muzakki']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/muzakki/<?= $m['id_muzakki']; ?>" method="POST" class="d-inline">
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