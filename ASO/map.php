<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Consultorios ASO</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
</head>
<body>
    <h2>Ubicación de los Consultorios</h2>
    <div id="map" style="height: 500px;"></div>

    <script>
        function initMap() {
            const mapOptions = {
                center: { lat: -0.1807, lng: -78.4678 }, // Centro del mapa
                zoom: 12
            };
            const map = new google.maps.Map(document.getElementById("map"), mapOptions);

            const locations = [
                { lat: -0.1807, lng: -78.4678 }, // Ejemplo de un consultorio
                // Agrega más ubicaciones de los 20 consultorios aquí
            ];

            locations.forEach((location) => {
                new google.maps.Marker({
                    position: location,
                    map: map
                });
            });
        }
    </script>
</body>
</html>
