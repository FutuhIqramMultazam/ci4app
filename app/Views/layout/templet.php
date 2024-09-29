<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
</head>

<body>

    <?= $this->include("layout/navbar") ?>

    <div class="container mt-5">

        <?= $this->renderSection("content") ?>

    </div>

    <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
</body>

</html>