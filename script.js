// Működő kereső funkció (példa adatokkal)
const data = [
    { title: "Bibliai idézet 1", content: "Ne félj, mert én veled vagyok." },
    { title: "Bibliai idézet 2", content: "Mindenre van erőm a Krisztusban." },
    { title: "Hír 1", content: "Új fejlesztések az oldalon!" }
];

function searchContent() {
    const query = document.getElementById('search-input').value.toLowerCase();
    const resultsDiv = document.getElementById('search-results');
    resultsDiv.innerHTML = "";

    const filteredData = data.filter(item => 
        item.title.toLowerCase().includes(query) || 
        item.content.toLowerCase().includes(query)
    );

    if (filteredData.length > 0) {
        filteredData.forEach(item => {
            const resultItem = document.createElement('p');
            resultItem.innerHTML = `<strong>${item.title}:</strong> ${item.content}`;
            resultsDiv.appendChild(resultItem);
        });
    } else {
        resultsDiv.innerHTML = "<p>Nincs találat.</p>";
    }
}
