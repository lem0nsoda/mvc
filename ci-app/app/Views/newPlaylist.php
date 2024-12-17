<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/newPlaylistStyle.css') ?>">
    <title>Playlist erstellen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
</head>
<body>
    <!-- Linke Seite -->
    <div class="left-section">
        <h1>Playlist erstellen</h1>
        <table class="table table-striped" id="content-table">
            <thead class="table-dark">
                <tr>
                    <th>Dateiname</th>
                    <th>Dauer</th>
                    <th>Dateityp</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!-- Rechte Seite -->
    <div class="right-section">
        <h4>Content von der Tabelle hierher ziehen</h4>
        <div id="preview-area" class="preview-area"></div>
    </div>

    <div class="playlist-footer">
        <span id="total-duration">Gesamtdauer: 0s</span>
        <button class="btn btn-primary" id="save-playlist-btn">Playlist speichern</button>
    </div>
      

    <script src="newPlaylistScript.js"></script>
</body>
</html>


<?= $this->endSection() ?>
