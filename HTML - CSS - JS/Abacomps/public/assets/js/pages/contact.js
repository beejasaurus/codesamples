var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 39.052718,
				lng: -77.105015
			  });
			   var marker = map.addMarker({
		            lat: 39.052718,
					lng: -77.105015,
		            title: 'Abacomps and US Royal Martial Arts'
		        });
			});
        }

    };
}();