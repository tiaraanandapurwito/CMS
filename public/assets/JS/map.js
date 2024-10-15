// Map functionality
function generateCode(prefix, num) {
    return prefix + num.toString().padStart(3, '0');
}

function createPopupContent(locationName, description, code) {
    return `
        <div>
            <h6>${description}</h6>
            <p><strong>Lokasi:</strong> ${locationName}</p>
            <p><strong>Kode:</strong> ${code}</p>
        </div>
    `;
}

var map = L.map('map').setView([0.5071, 101.4478], 11);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

const locations = [
    { coords: [0.477637, 101.430908], location: "Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru" },
    { coords: [0.467982, 101.413428], location: "Jl. Kamboja 36, Delima, Kec. Tampan, Kota Pekanbaru" },
];

const greenIcon = L.icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
    shadowSize: [41, 41]
});

locations.forEach((item, index) => {
    const coords = item.coords;
    const location = item.location;
    const code = generateCode('TJ', index + 1);

    L.marker(coords, { icon: greenIcon }).addTo(map)
        .bindPopup(createPopupContent(location, 'Tiang Jaringan Terpasang', code));
});

L.control.zoom({
    position: 'topright'
}).addTo(map);
