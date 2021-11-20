<template>
    <div id="mapid" style="width: 100%; height: 300px;"></div>
</template>

<script>
var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
    .bindPopup("<b>Zay</b> eCommerce Template<br />Location.").openPopup();

mymap.scrollWheelZoom.disable();
mymap.touchZoom.disable();

export default {
    name: "Map",
    mounted() {
        let leaflet = document.createElement('script')
        leaflet.setAttribute('src', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js')
        document.head.appendChild(leaflet)
    },
}
</script>

<style scoped>

</style>
