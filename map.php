<html>
  <head>
    <title>Add Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


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
    <h1 style = "text-align: center">Nearest Ambulances</h1>
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


         


     


        // The location 
      
        const Jashore = { lat: 23.1634, lng: 89.2182 };
        const Khulna = { lat: 22.8456, lng: 89.5403 };
        const Kushtia = { lat: 23.9088, lng: 89.1220 };
        const Magura = { lat: 23.4855, lng: 89.4198 };
        const Jhikargacha = { lat: 23.103141, lng: 89.100598 };






        // The map, centered at Jashore
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 9,
            center: Jashore
           
        });
        // The marker, positioned at Jashore

        addCurrMarker(Jashore);
        addMarker(Khulna);
        addMarker(Kushtia);
        addMarker(Magura);
        addMarker(Jhikargacha);



        
        function addCurrMarker(coords) {
              var marker = new google.maps.Marker({
              position:coords,
              map:map,
              icon: {
                url: "./img/cloc.png",
                scaledSize: new google.maps.Size(50, 50)
              }
            });
          }

        



          function addMarker(coords) {
              var marker = new google.maps.Marker({
              position:coords,
              map:map,
              icon: {
                url: "./img/ambulanceMapIcon.png",
                scaledSize: new google.maps.Size(50, 50)
              }
            });
          }
      }

        window.initMap = initMap;
    </script>


    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNEJ09nJ_qHJyULO_i_eyKC2ZAN4D0lgg&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>