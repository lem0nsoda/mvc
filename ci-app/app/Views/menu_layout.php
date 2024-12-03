<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav w-100 d-flex justify-content-around">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-folder"></i> Content
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('menu/showContent') ?>">New Upload</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('menu/showAllContent') ?>">All Content</a></li>
                    </ul>
                </li>
                <!-- Weitere Menüpunkte hier -->
            </ul>
        </div>
    </nav>

    <h1 class="hidden" id="ausgabe"></h1>
    <p class="hidden" id="text"></p>
    <table class="hidden" id="imageTable"></table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>
</html>
