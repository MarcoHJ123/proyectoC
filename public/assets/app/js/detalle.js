var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('mapa_ultimo'), {
          zoom: 13,
          center: {lat: -6.780269774792248, lng: -79.86731612254732}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: -6.780269774792248, lng: -79.86731612254732},
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }