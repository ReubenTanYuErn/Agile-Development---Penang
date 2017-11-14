function initMap() {
	
	var R_LineClear = {
		info:'<strong>Nasi Kandar Line Clear</strong><br>\
				Address: Georgetown, 10450 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/AbNDWaWZREL2">Click here to get directions</a>',
				lat: 5.419695, 
				long: 100.332504
	};
	
	var R_NewLane = {
		info: '<strong>New Lane Centre</strong><br>\
				Address: Lorong Baru, George Town, 10450 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/yheE484FrR22">Click here to get directions</a>',
				lat: 5.414853, 
				long: 100.326510
	};
	
	var R_MacalisterMansion = {
		info: '<strong>Macalister Mansion</strong><br>\
				Address: 228, Jalan Macalister, George Town, 11400 George Town, Pulau Pinang. <br>\
				<a href="https://goo.gl/maps/rRRgFopHc6J2">Click here to get directions</a>',
				lat: 5.418905 , 
				long: 100.318741
	};
	
	var R_FerringhiGrill = {
		info: '<strong>Ferringhi Grill</strong><br>\
				Address: Batu Feringgi Beach, Mezzanine Level, Rasa Wing Lobby, Kampung Tanjung Huma, 11100 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/8aveTpxiYZE2">Click here to get directions</a>',
				lat: 5.479211, 
				long: 100.254721
	};
	
	var R_GoldenThai = {
		info: '<strong>Golden Thai Seafood Village</strong><br>\
				Address: No. 69A, Jalan Batu Feringghi, 11100, Batu Feringgi, Pulau Pinang, 11050 Batu Ferringhi, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/5cCAFgAyHD82">Click here to get directions</a>',
				lat: 5.473681, 
				long: 100.247272
	};
	
	var R_GurneyFoodCourt = {
		info: '<strong>Gurney Food Court</strong><br>\
				Address: 172, Solok Gurney 1, Pulau Tikus, 10250 Jelutong, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/NFZ2vqhRMMv">Click here to get directions</a>',
				lat: 5.435594, 
				long: 100.311092
	};
	
	var R_The1885 = {
		info: '<strong>The 1885</strong><br>\
				Address: 10, Lebuh Farquhar, George Town, 10200 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/iaZoAW4gfoJ2">Click here to get directions</a>',
				lat: 5.423476, 
				long: 100.335777
	};
	
	var R_SupHameed = {
		info: '<strong>Restoran Sup Hameed</strong><br>\
				Address: 48, Jalan Penang, George Town, 10000 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/xssf14FApCG2">Click here to get directions</a>',
				lat: 5.421971, 
				long: 100.333996
	};
	
	var R_Kayu = {
		info: '<strong>Kayu Nasi Kandar</strong><br>\
				Address: No.216, Jalan Pinang, Pulau Pinang, 10000 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/Sjo4GLJJtbu">Click here to get directions</a>',
				lat: 5.336765, 
				long: 100.292930
	};
	
	var R_BatuLanchang = {
		info: '<strong>Batu Lanchang Food Court</strong><br>\
				Address: 25, Lintang Batu Lancang, Jelutong, 11600 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/4Nt8cjjVARt">Click here to get directions</a>',
				lat: 5.389611, 
				long: 100.305929
	};
	
	
	
	var locations = [
		[R_LineClear.info, R_LineClear.lat, R_LineClear.long, 0],
		[R_NewLane.info, R_NewLane.lat, R_NewLane.long, 1],
		[R_MacalisterMansion.info, R_MacalisterMansion.lat, R_MacalisterMansion.long, 2],
		[R_FerringhiGrill.info, R_FerringhiGrill.lat, R_FerringhiGrill, 3],
		[R_GoldenThai.info, R_GoldenThai.lat, R_GoldenThai.long, 4],
		[R_GurneyFoodCourt.info, R_GurneyFoodCourt.lat, R_GurneyFoodCourt.long, 5],
		[R_The1885.info, R_The1885.lat, R_The1885.long, 6],
		[R_SupHameed.info, R_SupHameed.lat, R_SupHameed.long, 7],
		[R_Kayu.info, R_Kayu.lat, R_Kayu.long, 8],
		[R_BatuLanchang.info, R_BatuLanchang.lat, R_BatuLanchang.long, 9],
		
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