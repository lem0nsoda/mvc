<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Playlists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/allPlaylistStyle.css') ?>">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">All Playlists</h1>
        <div class="row align-items-center mb-3">
            <div class="col-auto">
                <label for="sort-options" class="form-label mb-0">Sortieren nach:</label>
            </div>
            <div class="col-auto">
                <select id="sort-options" class="form-select">
                    <option>Playlistname (A-Z)</option>
                    <option>Playlistname (Z-A)</option>
                    <option>Playist-ID (aufsteigend)</option>
                    <option>Playist-ID (absteigend)</option>
                    <option>Dauer (kurz-lang)</option>
                    <option>Dauer (lang-kurz)</option>
                    <option>Geräte-ID (aufsteigend)</option>
                    <option>Geräte-ID (absteigend)</option>
                    <option>Erstellungsdatum (ältest zuerst)</option>
                    <option>Erstellungsdatum (aktuellest zuerst)</option>
                    <option>Häufigkeit (min-max)</option>
                    <option>Häufigkeit (max-min)</option>
                </select>
            </div>
        </div>
        <table class="table table-striped table-bordered" id="content-table">
            <thead class="table-dark">
                <tr>
                    <th>Playlist-ID</th>
                    <th>Playlistname</th>
                    <th>Erstellungsdatum</th>
                    <th>Geräte-ID</th>
                    <th>Dauer</th>
                    <th>Häufigkeit</th>
                </tr>
            </thead>
            <tbody>
                <!-- zeilen kommen hierhin -->
            </tbody>
        </table>
    </div>
    <script src="allPlaylistScript.js"></script>
</body>
</html>


<?= $this->endSection() ?>
