function initMap() {
	
	var H_Equatorial = {
		info:'<strong>Hotel Equatorial</strong><br>\
				Address: 1, Jalan Bukit Jambul, Queens Bay, 11900 Penang, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/QfsjkPNuUYt">Click here to get directions</a>',
				lat: 5.341060, 
				long: 100.278407
	};
	
	var H_HardRock = {
		info: '<strong>Hard Rock Hotel</strong><br>\
				Address: Jalan Batu Ferringhi, 11100 George Town, Pulau Pinang, Malaysia<br>\
				<a href="https://goo.gl/maps/s9vwkqzSRaU2">Click here to get directions</a>',
				lat: 5.467707, 
				long: 100.241613
	};
	
	var H_LonePine = {
		info: '<strong>Lone Pine Hotel</strong><br>\
				Address: Feringgi Plaza, 152B, Jalan Batu Ferringhi, Batu Ferringhi, 11050 Batu Ferringhi, Pulau Pinang. <br>\
				<a href="https://goo.gl/maps/Jc43ukThJBC2">Click here to get directions</a>',
				lat: 5.476240 , 
				long: 100.250136
	};
	
	var H_HolidayInn = {
		info: '<strong>Holiday Inn Resort</strong><br>\
				Address: 72, Jalan Batu Ferringhi, 11100 Penang, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/YRjJ5ZG9aSL2">Click here to get directions</a>',
				lat: 5.472945, 
				long: 100.247071
	};
	
	var H_FourPoints = {
		info: '<strong>Four Points by Sheraton</strong><br>\
				Address: 505 Jalan Tanjung Bungah, Tanjung Bungah, Tanjung Tokong, 11200 Penang, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/mcbQ7t9o59D2">Click here to get directions</a>',
				lat: 5.463790, 
				long: 100.301939
	};
	
	var H_Sentral = {
		info: '<strong>Hotel Sentral</strong><br>\
				Address: 12, Lorong Kinta, George Town, 10400 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/a2c3QRpavvS2">Click here to get directions</a>',
				lat: 5.415708, 
				long: 100.327135
	};
	
	var H_RainbowParadise = {
		info: '<strong>Rainbow Paradise</strong><br>\
				Address: 527, Jalan Tanjung Bungah, Tanjung Tokong, 11200 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/m35iZqjoSeA2">Click here to get directions</a>',
				lat: 5.467432, 
				long: 100.289451
	};
	
	var H_Bayview = {
		info: '<strong>Bayview Hotel</strong><br>\
				Address: Lebuh Farquhar, George Town, 10200 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/vN2nSgHArGR2">Click here to get directions</a>',
				lat: 5.421927, 
				long: 100.335967
	};
	
	var H_Flamingo = {
		info: '<strong>Flamingo by the Beach</strong><br>\
				Address: Tanjung Tokong, 11200 Tanjung Bungah, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/mqw3QHe45hr">Click here to get directions</a>',
				lat: 5.467071, 
				long: 100.288716
	};
	
	var H_BayviewBeach = {
		info: '<strong>Bayview Beach Resort</strong><br>\
				Address: Feringgi Plaza, Jalan Batu Ferringhi, Batu Ferringhi, 11100 Batu Ferringhi, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/woLhkbohE8t">Click here to get directions</a>',
				lat: 5.466090, 
				long: 100.241339
	};
	
	
	
	var locations = [
		[H_Equatorial.info, H_Equatorial.lat, H_Equatorial.long, 0],
		[H_HardRock.info, H_HardRock.lat, H_HardRock.long, 1],
		[H_LonePine.info, H_LonePine.lat, H_LonePine.long, 2],
		[H_HolidayInn.info, H_HolidayInn.lat, H_HolidayInn.long, 3],
		[H_FourPoints.info, H_FourPoints.lat, H_FourPoints.long, 4],
		[H_Sentral.info, H_Sentral.lat, H_Sentral.long, 5],
		[H_RainbowParadise.info, H_RainbowParadise.lat, H_RainbowParadise.long, 6],
		[H_Bayview.info, H_Bayview.lat, H_Bayview.long, 7],
		[H_Flamingo.info, H_Flamingo.lat, H_Flamingo.long, 8],
		[H_BayviewBeach.info, H_BayviewBeach.lat, H_BayviewBeach.long, 9],
		
		];
		
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 11,
		center: new google.maps.LatLng(5.396447, 100.264147),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	
	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}