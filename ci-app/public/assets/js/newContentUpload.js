// ids/bereiche von html
const dropArea = document.getElementById('dropArea');
const dataInput = document.getElementById('dataInput');
const fileListContainer = document.getElementById('fileList');
const saveButton = document.getElementById('saveButton');

let filesData = [];

//bilder im dropfeld 'aufnehmen' (auserhalb nicht)
dropArea.addEventListener('dragover', (event) => {
    event.preventDefault();
});

//wenn eine Datei abgelegt wird
dropArea.addEventListener('drop', (event) => {
    event.preventDefault();
    //liste wo daten von bild hineinkommt
    const files = event.dataTransfer.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        // uur bilder oder videos akzeptieren
        if (file.type.startsWith('image/') || file.type.startsWith('video/')) {
            const fileData = {
                name: file.name,
                type: file.type,
                size: file.size,
                lastModified: file.lastModified,
                lastModifiedDate: file.lastModifiedDate,
                preview: URL.createObjectURL(file)
            };

            filesData.push(fileData);

            // Datei in der Vorschau darunter klein anzeigen
            displayFilePreview(fileData);
            displayFileInList(fileData);
        } else {
            alert('Bitte nur Bild- oder Videodateien hochladen.');
        }
    }
});

//um bilder klein anzuzeigen
function displayFilePreview(fileData) {
    if (fileData.type.startsWith('image/')) {
        const imgPreview = document.createElement('img');
        imgPreview.src = fileData.preview;
        imgPreview.alt = fileData.name;
        dataInput.appendChild(imgPreview);
      }
      else if (fileData.type.startsWith('video/')) {
        const videoPreview = document.createElement('video');
        videoPreview.src = fileData.preview;
        videoPreview.controls = true;
        dataInput.appendChild(videoPreview);
    }
}

//Dateigröße formatieren
function formatFileSize(bytes) {
    if (bytes < 1024) return bytes + ' B';
    else if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
    else return (bytes / 1048576).toFixed(1) + ' MB';
}

// daten als JSON speichern
function saveDataAsJSON() {
    const jsonData = JSON.stringify(filesData, null, 2);  //null->enter; 2->formatierung
    //binary large objekt
    const blob = new Blob([jsonData], { type: 'application/json' });
    //link für json-file download
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'uploadedFiles.json';
    link.click();
    URL.revokeObjectURL(link.href);
}

saveButton.addEventListener('click', saveDataAsJSON);
