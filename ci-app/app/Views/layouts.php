<!-- app/Views/layouts/main.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Default Title') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <?php include(APPPATH . 'Views/includes/header.php'); ?>
    
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>
    
    <?php include(APPPATH . 'Views/footer.php'); ?>
</body>
</html>
