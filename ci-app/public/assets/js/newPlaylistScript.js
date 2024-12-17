document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.querySelector('#content-table tbody');
    const previewArea = document.getElementById('preview-area');
    const totalDurationSpan = document.getElementById('total-duration');
    let totalDuration = 0;

    // Fetch data from the server
    fetch('/data')
        .then(response => response.json())
        .then(data => populateTable(data))
        .catch(error => console.error('Error fetching data:', error));

    // Tabelle 
    function populateTable(data) {
        tableBody.innerHTML = data.map(item => `
            <tr draggable="true" data-json='${JSON.stringify(item)}'>
                <td>${item.dateiname}</td>
                <td>${item.dauer}</td>
                <td>${item.typ}</td>
            </tr>
        `).join('');

        // Drag-Event für Tabellenzeilen
        document.querySelectorAll('#content-table tr').forEach(row => {
            row.addEventListener('dragstart', e => {
                e.dataTransfer.setData('text/plain', row.dataset.json);
            });
        });
    }

    // Rechte Vorschau-Box: Drag-and-Drop ermöglichen
    previewArea.addEventListener('dragover', e => e.preventDefault());
    previewArea.addEventListener('drop', e => {
        e.preventDefault();
        const item = JSON.parse(e.dataTransfer.getData('text/plain'));
        addToPreview(item);
    });

    function addToPreview(item) {

        const div = document.createElement('div');
        div.className = 'preview-item';
        div.dataset.dauer = item.dauer;

        div.innerHTML = `
            <span>${item.dateiname} (${item.typ})</span>
            <div>
                <button class="btn btn-sm btn-outline-danger decrease-btn">-</button>
                <span class="duration">${item.dauer}s</span>
                <button class="btn btn-sm btn-outline-success increase-btn">+</button>
            </div>
        `;

        // Buttons hinzufügen für Dauer-Steuerung
        const decreaseBtn = div.querySelector('.decrease-btn');
        const increaseBtn = div.querySelector('.increase-btn');
        const durationSpan = div.querySelector('.duration');

        decreaseBtn.addEventListener('click', () => adjustDuration(div, durationSpan, -1));
        increaseBtn.addEventListener('click', () => adjustDuration(div, durationSpan, 1));

        previewArea.appendChild(div);
        updateTotalDuration();

        // Sortierung der Elemente in der Vorschau ermöglichen
        new Sortable(previewArea, {
            //Dauer der Anzeige bei verschiebung von inhalt
            animation: 150,
        });
    }

    function adjustDuration(element, durationSpan, change) {
        let currentDuration = parseInt(element.dataset.dauer);
        currentDuration = Math.max(0, currentDuration + change); // Keine negative Dauer
        element.dataset.dauer = currentDuration;
        durationSpan.textContent = `${currentDuration}s`;
        updateTotalDuration();
    }

    function updateTotalDuration() {
        totalDuration = [...previewArea.children]
            .map(el => parseInt(el.dataset.dauer))
            .reduce((a, b) => a + b, 0);
        totalDurationSpan.textContent = `Gesamtdauer: ${totalDuration}s`;
    }
});
