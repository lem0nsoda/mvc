<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
        </ul>
    </div>
</nav>
