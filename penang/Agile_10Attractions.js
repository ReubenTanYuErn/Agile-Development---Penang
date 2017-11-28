function initMap() {
	
	var A_PenangHill = {
		info:'<strong>Penang Hill</strong><br>\
				Address: 422, Jalan Bukit Bendera, 11500 Ayer Itam, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/uVtbz4KGmsH2">Click here to get directions</a>',
				lat: 5.433333, 
				long: 100.266667
	};
	
	var A_KekLokSi = {
		info: '<strong>Kek Lok Si Temple</strong><br>\
				Address: 100-L, Tingkat Lembah Ria 1, 11500 Ayer Itam, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/HyztHWvLapv">Click here to get directions</a>',
				lat: 5.397790, 
				long: 100.272540
	};
	
	var A_CheongFattTze = {
		info: '<strong>Cheong Fatt Tze Mansion</strong><br>\
				Address: 4, Leith St, Georgetown, 10200 George Town, Pulau Pinang. <br>\
				<a href="https://goo.gl/maps/PWaWbwDTBpJ2">Click here to get directions</a>',
				lat: 5.421288 , 
				long: 100.335233
	};
	
	var A_Escape = {
		info: '<strong>Escape Adventureland</strong><br>\
				Address: 828, Jalan Teluk Bahang, Teluk Bahang, 11050 Teluk Bahang, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/bbeP3ehU51B2">Click here to get directions</a>',
				lat: 5.449438, 
				long: 100.215173
	};
	
	var A_AdventureZone = {
		info: '<strong>Adventure Zone Theme Park</strong><br>\
				Address: Jalan Batu Ferringhi, Kampung Tanjung Huma, 11050 Batu Ferringhi, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/ktLxnC7KFtz">Click here to get directions</a>',
				lat: 5.476449, 
				long: 100.251290
	};
	
	var A_InteractiveMuseum = {
		info: '<strong>Made In Penang Interactive Museum</strong><br>\
				Address: 3, Pengkalan Weld, George Town, 10300 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/gnB9m8kk24G2">Click here to get directions</a>',
				lat: 5.416388, 
				long: 100.343758
	};
	
	var A_WarMuseum = {
		info: '<strong>Penang War Museum</strong><br>\
				Address: Jalan Batu Maung, 11960 Batu Maung, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/MnUaDiTvRf42">Click here to get directions</a>',
				lat: 5.281457, 
				long: 100.288755
	};
	
	var A_FortCorn = {
		info: '<strong>Fort Cornwallis</strong><br>\
				Address: Jalan Tun Syed Sheh Barakbah, George Town, 10200 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/UB2KYx5h3G72">Click here to get directions</a>',
				lat: 5.420505, 
				long: 100.343864
	};
	
	var  A_KhooKhongsi = {
		info: '<strong>Penang Khoo Khongsi</strong><br>\
				Address: 18, Cannon Square, George Town, 10450 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/MmaexttpQ7M2">Click here to get directions</a>',
				lat: 5.415033, 
				long: 100.336802
	};
	
	var A_Wat = {
		info: '<strong>Wat Chaiya Mangkalaram</strong><br>\
				Address: 17, Lorong Burma, Pulau Tikus, 10250 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/uEcwQDdXz6M2">Click here to get directions</a>',
				lat: 5.431673, 
				long: 100.313811
	};
	
	
	
	var locations = [
		[A_PenangHill.info, A_PenangHill.lat, A_PenangHill.long, 0],
		[A_KekLokSi.info, A_KekLokSi.lat, A_KekLokSi.long, 1],
		[A_CheongFattTze.info, A_CheongFattTze.lat, A_CheongFattTze.long, 2],
		[A_Escape.info, A_Escape.lat, A_Escape, 3],
		[A_AdventureZone.info, A_AdventureZone.lat, A_AdventureZone.long, 4],
		[A_InteractiveMuseum.info, A_InteractiveMuseum.lat, A_InteractiveMuseum.long, 5],
		[A_WarMuseum.info, A_WarMuseum.lat, A_WarMuseum.long, 6],
		[A_FortCorn.info, A_FortCorn.lat, A_FortCorn.long, 7],
		[A_KhooKhongsi.info, A_KhooKhongsi.lat, A_KhooKhongsi.long, 8],
		[A_Wat.info, A_Wat.lat, A_Wat.long, 9],
		
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
