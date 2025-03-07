<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn-icons-png.flaticon.com/512/189/189688.png" rel="icon" type="image/png"/>
    <title id="dynamicTitle">Inch To Centimeter Converter</title>
    <meta content="Effortlessly convert inches to centimeters with our sleek, accurate tool." id="metaDescription" name="description"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>

    <style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #e0eafc, #cfdef3);
    color: #1f2a44;
    line-height: 1.6;
    min-height: 100vh;
}
.main-content {
    padding: 50px 20px;
    max-width: 1100px;
    margin: 0 auto;
}
.header {
    background: rgba(255, 255, 255, 0.95);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
    text-align: center;
    backdrop-filter: blur(10px);
}
.header h1 {
    font-size: 2.5em;
    color: #1f2a44;
    background: linear-gradient(90deg, #6b7280, #3b82f6);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.header h1 a {
    text-decoration: none;
}
.header nav {
    margin-top: 15px;
}
.header nav a {
    color: #3b82f6;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 600;
    transition: color 0.3s ease;
}
.header nav a:hover {
    color: #1d4ed8;
    text-decoration: underline;
}
.card {
    background: rgba(255, 255, 255, 0.9);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
}
.calculator {
    text-align: center;
}
.calculator input {
    padding: 12px;
    width: 100%;
    max-width: 250px;
    border: 2px solid #d1d5db;
    border-radius: 8px;
    font-size: 1.1em;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}
.calculator input:focus {
    border-color: #3b82f6;
    outline: none;
}
.calculator button {
    padding: 12px 30px;
    background: linear-gradient(90deg, #3b82f6, #1d4ed8);
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: transform 0.3s ease, background 0.3s ease;
}
.calculator button:hover {
    background: linear-gradient(90deg, #1d4ed8, #1e3a8a);
    transform: scale(1.05);
}
.result {
    margin-top: 20px;
    font-size: 1.5em;
    font-weight: 600;
    color: #3b82f6;
    animation: fadeIn 0.5s ease-in;
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    gap: 20px;
}
.grid-item {
    background: #f9fafb;
    padding: 15px;
    text-align: center;
    border-radius: 10px;
    transition: transform 0.3s ease, background 0.3s ease;
}
.grid-item:hover {
    transform: scale(1.08);
    background: #e0eafc;
}
.grid-item a {
    color: #3b82f6;
    text-decoration: none;
    font-weight: 600;
}
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 25px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}
.table th, .table td {
    padding: 12px;
    border: 1px solid #e5e7eb;
    text-align: center;
}
.table th {
    background: linear-gradient(90deg, #3b82f6, #1d4ed8);
    color: #fff;
    font-weight: 600;
}
.formula, .steps, .explanation {
    margin-top: 25px;
    padding: 20px;
    background: #f9fafb;
    border-radius: 10px;
    border-left: 4px solid #3b82f6;
}
.formula h3, .steps h3, .explanation h3 {
    color: #3b82f6;
    margin-bottom: 12px;
    font-size: 1.3em;
}
.sitemap pre {
    background: #f9fafb;
    padding: 20px;
    border-radius: 10px;
    font-size: 0.95em;
    white-space: pre-wrap;
    max-height: 450px;
    overflow-y: auto;
    border: 1px solid #e5e7eb;
}
.sitemap button {
    margin-top: 20px;
    padding: 12px 30px;
    background: linear-gradient(90deg, #3b82f6, #1d4ed8);
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}
.sitemap button:hover {
    background: linear-gradient(90deg, #1d4ed8, #1e3a8a);
}
.footer {
    text-align: center;
    padding: 25px;
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.05);
    margin-top: 50px;
    border-radius: 15px 15px 0 0;
    color: #6b7280;
}
@media (max-width: 768px) {
    .main-content {
        padding: 30px 15px;
    }
    .header h1 {
        font-size: 1.8em;
    }
    .header nav a {
        display: block;
        margin: 8px 0;
    }
    .calculator input {
        max-width: 200px;
    }
}
    </style>
</head>
<body>
    <div class="main-content">
        <div class="header">
            <h1><a href="?" onclick="navigateTo('?'); return false;">Inch To Centimeter Converter</a></h1>
            <nav>
                <a href="?page=sitemap" onclick="navigateTo('?page=sitemap'); return false;">Sitemap</a>
            </nav>
        </div>
        <div class="card calculator">
            <input id="inputValue" placeholder="Enter Inches (e.g., 10)" type="number"/>
            <button onclick="convertInchToCm()">Convert</button>
            <div class="result" id="result"></div>
        </div>
        <div class="card" id="gridContainer">
            <div class="grid"></div>
        </div>
        <div class="card sitemap" id="sitemapContainer" style="display: none;">
            <h3>Sitemap Preview (1-1000 Inches)</h3>
            <pre id="sitemap"></pre>
            <button onclick="downloadSitemap()">Download Sitemap.xml</button>
        </div>
        <div class="card" id="detailedContent" style="display: none;">
            <div class="table-container">
                <h3>Nearby Conversions</h3>
                <table class="table" id="inchToCmTable">
                    <thead>
                        <tr>
                            <th>Inches (in)</th>
                            <th>Centimeters (cm)</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="formula">
                <h3>How It Works</h3>
                <p>Multiply inches by 2.54 to get centimeters.</p>
            </div>
            <div class="steps">
                <h3>Conversion Steps</h3>
                <p id="stepExplanation"></p>
            </div>
            <div class="explanation">
                <h3>Why It Matters</h3>
                <p id="explanationText"></p>
            </div>
        </div>
        <div class="footer">
            <p>© 2025 Inch to Centimeter Converter. All rights reserved.</p>
        </div>
    </div>

    <script>
    function updatePageMetadata(inches) {
        const titleElement = document.getElementById('dynamicTitle');
        const metaDescription = document.getElementById('metaDescription');
        
        if (inches !== null && !isNaN(inches) && inches !== '') {
            document.title = `${inches} Inches To Centimeters (in to cm) Converter`;
            titleElement.textContent = `${inches} Inches To Centimeters (in to cm) Converter`;
            if (metaDescription) {
                metaDescription.setAttribute('content', `Convert ${inches} inches to centimeters instantly with our sleek tool.`);
            }
        } else {
            document.title = 'Inch To Centimeter Converter';
            titleElement.textContent = 'Inch To Centimeter Converter';
            if (metaDescription) {
                metaDescription.setAttribute('content', 'Effortlessly convert inches to centimeters with our sleek, accurate tool.');
            }
        }
    }

    function getBaseUrl() {
        return window.location.origin;
    }

    function navigateTo(query) {
        window.history.pushState({}, document.title, query);
        renderPage();
    }

    function getQueryParams() {
        const params = new URLSearchParams(window.location.search);
        return {
            inches: params.get('inches'),
            page: params.get('page')
        };
    }

    function generateFullSitemap() {
        const baseUrl = getBaseUrl();
        const currentDate = new Date().toISOString().split('T')[0];
        
        let sitemap = '<?xml version="1.0" encoding="UTF-8"?>\n';
        sitemap += '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n';
        
        sitemap += '  <url>\n';
        sitemap += `    <loc>${baseUrl}/</loc>\n`;
        sitemap += `    <lastmod>${currentDate}</lastmod>\n`;
        sitemap += '    <changefreq>daily</changefreq>\n';
        sitemap += '    <priority>1.0</priority>\n';
        sitemap += '  </url>\n';
        
        sitemap += '  <url>\n';
        sitemap += `    <loc>${baseUrl}/?page=sitemap</loc>\n`;
        sitemap += `    <lastmod>${currentDate}</lastmod>\n`;
        sitemap += '    <changefreq>monthly</changefreq>\n';
        sitemap += '    <priority>0.5</priority>\n';
        sitemap += '  </url>\n';
        
        for (let i = 1; i <= 1000; i++) {
            const url = `${baseUrl}/?inches=${i}`;
            sitemap += '  <url>\n';
            sitemap += `    <loc>${url}</loc>\n`;
            sitemap += `    <lastmod>${currentDate}</lastmod>\n`;
            sitemap += '    <changefreq>monthly</changefreq>\n';
            sitemap += '    <priority>0.8</priority>\n';
            sitemap += '  </url>\n';
        }
        
        sitemap += '</urlset>';
        return sitemap;
    }

    function generateSitemapPreview() {
        const sitemapContent = generateFullSitemap();
        document.getElementById("sitemap").textContent = sitemapContent;
    }

    function downloadSitemap() {
        const sitemapContent = generateFullSitemap();
        const blob = new Blob([sitemapContent], { type: 'text/xml' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'sitemap.xml';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    function renderPage() {
        const { inches, page } = getQueryParams();
        const gridContainer = document.getElementById('gridContainer');
        const detailedContent = document.getElementById('detailedContent');
        const sitemapContainer = document.getElementById('sitemapContainer');

        const inchValue = inches ? parseFloat(inches) : null;

        if (!inches && !page) {
            gridContainer.style.display = 'block';
            sitemapContainer.style.display = 'none';
            detailedContent.style.display = 'none';
            generateConversionGrid();
            updatePageMetadata(null);
        } else if (page === 'sitemap') {
            gridContainer.style.display = 'none';
            detailedContent.style.display = 'none';
            sitemapContainer.style.display = 'block';
            generateSitemapPreview();
            updatePageMetadata(null);
        } else if (!isNaN(inchValue)) {
            gridContainer.style.display = 'none';
            sitemapContainer.style.display = 'none';
            detailedContent.style.display = 'block';
            updatePageMetadata(inchValue);
            showDetailedConversion(inchValue);
        } else {
            navigateTo('?');
        }
    }

    function generateConversionGrid() {
        const grid = document.querySelector('.grid');
        grid.innerHTML = '';
        for (let i = 1; i <= 500; i += 10) {
            const gridItem = document.createElement('div');
            gridItem.className = 'grid-item';
            gridItem.innerHTML = `<a href="?inches=${i}" onclick="navigateTo('?inches=${i}'); return false;">${i} IN To CM</a>`;
            grid.appendChild(gridItem);
        }
    }

    function showDetailedConversion(inches) {
        const inputValue = document.getElementById('inputValue');
        const resultDiv = document.getElementById('result');
        inputValue.value = inches;
        const cm = inches * 2.54;
        resultDiv.innerHTML = `${inches} IN equals ${cm.toFixed(2)} centimeters`;

        const tableBody = document.querySelector('#inchToCmTable tbody');
        tableBody.innerHTML = '';
        for (let i = 1; i <= 9; i++) {
            const incrementalValue = inches + (i / 10);
            const convertedValue = incrementalValue * 2.54;
            tableBody.innerHTML += `<tr><td>${incrementalValue.toFixed(1)}</td><td>${convertedValue.toFixed(2)}</td></tr>`;
        }

        document.getElementById('stepExplanation').innerHTML = `
            1. Take ${inches} inches.<br>
            2. Multiply by 2.54.<br>
            3. You will get ${cm.toFixed(2)} centimeters.
        `;

        document.getElementById('explanationText').innerHTML = `
            Converting inches to centimeters is a breeze! Start with ${inches} inches, multiply by 2.54 (the standard conversion factor), and voilà—you’ve got ${cm.toFixed(2)} centimeters!
        `;
    }

    function convertInchToCm() {
        const inches = parseFloat(document.getElementById('inputValue').value);
        if (!isNaN(inches) && inches > 0) {
            navigateTo(`?inches=${inches}`);
        } else {
            document.getElementById('result').innerHTML = 'Please enter a valid number greater than 0.';
        }
    }

    window.addEventListener('popstate', renderPage);
    window.addEventListener('load', () => {
        renderPage();
    });

    renderPage();
    </script>
</body>
</html>
