<html>
  <head>
    <title>Add Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>


    <style>
        /* Set the size of the div element that contains the map */
        #map {
        margin: auto;
        height: 90vh;
        /* The height is 400 pixels */
        width: 90%;
        /* The width is the width of the web page */
        }       
    </style>
  </head>
  <body>


  <?php 
  include('../connect.php');

        $midcsID = $_GET["id"];


        $midcsDetailSql = "SELECT * FROM midcs WHERE id = '$midcsID' ";
        $midcsDetail = $conn->query($midcsDetailSql)->fetch_assoc();

        $midcsLoc = $midcsDetail["location"];
        $midcsName = $midcsDetail["midcsname"];


        $locationCoordinateFetch = "SELECT * FROM locationcoordinate WHERE locationName = '$midcsLoc'";
        $locationCoordinate = $conn->query($locationCoordinateFetch)->fetch_assoc();
        $lati = $locationCoordinate["latitude"];
        $long = $locationCoordinate["longitude"];
        



  ?>




    <h1 style = "text-align: center">Next Direction of <?php echo $midcsName ?></h1>
    <!--The div element for the map -->
    
    <div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->


    
    <script>




 

      

        // Initialize and add the map
        function initMap() {


        
        
        const Center = {lat: <?php echo $lati?>, lng: <?php echo $long?>};
        






        // The map, centered at Jashore
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 9,
            center: Center
           
        });
        // The marker, positioned at Jashore

        addMIDCSMarker(Center);
       



        
        function addMIDCSMarker(coords) {
              var marker = new google.maps.Marker({
              position:coords,
              map:map,
              icon: {
                url: "../img/mobileclinic.png",
                scaledSize: new google.maps.Size(50, 50)
              }
            });
          }

          

          const infoWindow = new google.maps.InfoWindow({
            content: "",
            disableAutoPan: true,
          });
          // Create an array of alphabetical characters used to label the markers.
          const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
          // Add some markers to the map.
          const markers = locations.map((position, i) => {
            const label = labels[i % labels.length];
            const marker = new google.maps.Marker({
              position,
              label,
            });

            // markers can only be keyboard focusable when they have click listeners
            // open info window when marker is clicked
            marker.addListener("click", () => {
              infoWindow.setContent(label);
              infoWindow.open(map, marker);
            });
            return marker;
          });

          // Add a marker clusterer to manage the markers.
          const markerCluster = new markerClusterer.MarkerClusterer({ map, markers });


         
      }

      const locations = [
        { lat: 22.8456, lng: 89.5303},
        { lat: 22.8556, lng: 89.5403},
        { lat: 22.8356, lng: 89.5503},
        { lat: 22.8456, lng: 89.5603},
        { lat: 22.8456, lng: 89.5503},


        { lat: 23.1434, lng: 89.1582},
        { lat: 23.2834, lng: 89.2082},
        { lat: 23.3034, lng: 89.1582},
        { lat: 23.1434, lng: 89.1582},



        { lat: 23.9388, lng: 89.5503},
        { lat: 23.9988, lng: 89.2303},
        { lat: 24.0088, lng: 89.1303},
        { lat: 23.8088, lng: 89.4303},
        { lat: 23.1088, lng: 89.1303},

       



       





      ];

        window.initMap = initMap;
    </script>



    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNEJ09nJ_qHJyULO_i_eyKC2ZAN4D0lgg&callback=initMap&v=weekly"
      defer
    ></script>
    
  </body>
</html>
