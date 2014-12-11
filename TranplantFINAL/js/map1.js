var geocoder;
    var map;


    function initialize() {

      geocoder = new google.maps.Geocoder();
      var myLatLng = new google.maps.LatLng(-33.890542, 151.274856);
    
      var styles = [
       {
         stylers: [
         { visibility: 'simplified' },
         { gamma: 20 },
         { weight: 5 }
         ]
       },
        {
       featureType: "water",
       stylers: [
        { color: "#008FB2" },
       ]
        },
        {
       featureType: "road",
       stylers: [
        { visibility: "off" }
       ]
        },
        {
         featureType: "landscape",
         stylers: [
          { color:"#47D147"}
         ]
        }
      ];
    
      var styledMap = new google.maps.StyledMapType(styles,
       {name: "Styled Map"});

      var mapOptions = {
      zoom: 4,
      center: new google.maps.LatLng(40.711877, -73.992423),
      mapTypeControl: true,
      streetViewControl:true,
      zoomControl: true,
      };

      map = new google.maps.Map(document.getElementById('map'),mapOptions);

      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');
    }

    google.maps.event.addDomListener(window, 'load', initialize);