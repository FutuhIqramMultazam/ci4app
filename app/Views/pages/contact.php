<?= $this->extend('layout/templet') ?>


<?= $this->section('content') ?>
<div class="row">
    <div class="col">

        <h1 class="mb-5">Contact</h1>

        <?php foreach ($alamat as $a): ?>
            <ul>
                <li>Nama : <?= $a["nama"]; ?></li>
                <li>Usia : <?= $a["usia"]; ?></li>
                <li>Pekerjaan : <?= $a["pekerjaan"]; ?></li>
                <li>Kota : <?= $a["kota"]; ?></li>
                <li>Desa : <?= $a["des"]; ?></li>
                <li>Kampung : <?= $a["kamp"]; ?></li>
            </ul>
        <?php endforeach; ?>

    </div>
</div>
<?= $this->endSection(); ?>