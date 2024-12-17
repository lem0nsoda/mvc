document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.querySelector('#content-table tbody');
    const sortOptions = document.querySelector('#sort-options');

    function fetchData(sortOption = '') {
        const url = `/data?sort=${sortOption}`;
        console.log(`Fetching data with sort option: ${sortOption}`);
        fetch(url)
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                console.log('Fetched data:', data);
                populateTable(data);
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    function populateTable(rows) {
        tableBody.innerHTML = rows.map(row => `
            <tr>
                <td>${row.dateiname}</td>
                <td>${row.pfad}</td>
                <td>${row.erstellungsdatum}</td>
                <td>${row.geraeteid}</td>
                <td>${row.dauer}</td>
                <td>${row.typ}</td>
            </tr>
        `).join('');
    }

    sortOptions.addEventListener('change', () => fetchData(sortOptions.value));

    fetchData();
});
