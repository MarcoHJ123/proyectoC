window.onload = function (){
      var map = new GMap2(document.getElementById("map"));
      map.setCenter(new google.maps.LatLng(-6.780269774792248,-79.86731612254732),10);
      map.addControl(new GLargeMapControl());
      map.setMapType(G_NORMAL_MAP);

      var point = new GPoint ();
      var marker = new GMarker(point);
      map.addOverlay(marker);

      GEvent.addListener(map, "click", function (overlay,point){
         if (point){
            marker.setPoint(point);
            document.posicion.ubicacio_lt.value=point.lat()
            document.posicion.ubicacio_ln.value=point.lng()
         }
      });
};
