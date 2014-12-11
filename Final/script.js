function initialize() {
		        var map = document.getElementById('map');
		        var mapSelect = {
		          center: new google.maps.LatLng(40.735252,-73.994522),
		          zoom: 8,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        }
	        	var map = new google.maps.Map(map, mapSelect)
	      	}
	      	google.maps.event.addDomListener(window, 'load', initialize);