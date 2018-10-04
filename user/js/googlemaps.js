function loadMap() {
        var myLatLng = {lat: 23.0328597, lng: 72.5652274};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 17
        });
        
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng
          
        });
    }