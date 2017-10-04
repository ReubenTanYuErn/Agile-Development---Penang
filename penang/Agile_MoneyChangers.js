function initMap() {
	
	var M_SuriaGurney = {
		info:'<strong>Suria Muhabat Sdn Bhd</strong><br>\
				Address: Unit No. 170-B1-40 Plaza Gurney,Persiaran Gurney, 10250 George Town, Pulau Pinang.<br>\
				Phone: 04 218 9257<br>',
				lat: 5.434666, 
				long: 100.314628
	};
	
	var M_TraderMoney = {
		info:'<strong>R Trader Money Changer (M) Sdn Bhd</strong><br>\
				Address: 188, Ground Floor, Sunrise Tower, Persiaran Gurney, 10250 George Town, Pulau Pinang.<br>\
				Phone: 04 2273 222<br>',
				lat: 5.439854, 
				long: 100.308441
	};
	
	var  M_SuriaQueensbay= {
		info:'<strong>Suria Muhabat Sdn Bhd</strong><br>\
				Address: Unit LG-92-D, Lower Ground Floor, Queensbay Mall, 100, Persiaran Bayan Indah, 11900 Bayan Lepas, Pulau Pinang.<br>\
				Phone: 04 638 0057<br>',
				lat: 5.333926, 
				long: 100.306996
	};
	var  M_MohdKassim= {
		info:'<strong>M Mohamed Kassim Forex</strong><br>\
				Address: 47-49 Pitt Street, 10200 George Town, Pulau Pinang. <br>\
				Phone: 04 261 0242<br>',
				lat: 5.417756, 
				long: 100.338472
	};
	
	var M_InternationalMega = {
		info:'<strong>International Mega Forex</strong><br>\
				Address: Pitt Street 10200 George Town, Pulau Pinang.<br>\
				Phone: 04 261 1526<br>',
				lat: 5.417503, 
				long: 100.338058
	};
	
	var M_Dean = {
		info:'<strong>Dean Forex (M) Sdn Bhd</strong><br>\
				Address: CII-1-04 Arked Penang 1 Komtar,Penang Road, 10000 Pulau Pinang.<br>\
				Phone: 04 262 2424<br>',
				lat: 5.414861, 
				long: 100.329317
	};
	
	var M_Navrose = {
		info:'<strong>Navrose Trading Sdn Bhd </strong><br>\
				Address: 6A Beach Street, 10300 Penang <br>\
				Phone: 04 261 2894<br>',
				lat: 5.415638, 
				long: 100.329197
	};
	
	var M_Haja = {
		info:'<strong>Haja Shareef K.P.M Abdul Kader </strong><br>\
				Address: 200 Beach Street, 10300 George Town, Pulau Pinang.<br>\
				Phone: 04 264 3203 <br>',
				lat: 5.415106, 
				long: 100.339012
	};
	
	var M_Rahimas = {
		info:'<strong>Rahimas Forex Sdn Bhd </strong><br>\
				Address: 517 Chulia Street, 10200 George Town, Pulau Pinang. <br>\
				Phone: 04 262 6268 <br>',
				lat: 5.419833, 
				long: 100.332804
	};
	
	var M_Best = {
		info:'<strong>Best Mart Forex </strong><br>\
				Address: 53 Pitt Street, 10200 George Town, Pulau Pinang.<br>\
				Phone: 04 261 2149 <br>',
				lat: 5.417673, 
				long: 100.338377
	};
	
	var M_Shadani = {
		info:'<strong>Shadani Mesra Sdn Bhd</strong><br>\
				Address: 417E Chulia Street, 10200 Pulau Pinang.<br>\
				Phone: 04 261 7284<br>',
				lat: 5.419070, 
				long: 100.334580
	};
	
	var M_Evertrust = {
		info:'<strong>Evertrust Gems Paradise</strong><br>\
				Address: 1F-143 Persiaran Bayan Indah, Queensbay Mall, 11900 Bayan Lepas, Pulau Pinang.<br>\
				Phone: 04 641 5555 <br>',
				lat: 5.332920, 
				long: 100.306600
	};
	
	var locations = [
		[M_SuriaGurney.info, M_SuriaGurney.lat, M_SuriaGurney.long, 0],
		[M_TraderMoney.info, M_TraderMoney.lat, M_TraderMoney.long, 1],
		[M_SuriaQueensbay.info, M_SuriaQueensbay.lat, M_SuriaQueensbay.long, 2],
		[M_MohdKassim.info, M_MohdKassim.lat, M_MohdKassim, 3],
		[M_InternationalMega.info, M_InternationalMega.lat, M_InternationalMega.long, 4],
		[M_Dean.info, M_Dean.lat, M_Dean.long, 5],
		[M_Navrose.info, M_Navrose.lat, M_Navrose.long, 6],
		[M_Haja.info, M_Haja.lat, M_Haja.long, 7],
		[M_Rahimas.info, M_Rahimas.lat, M_Rahimas.long, 8],
		[M_Best.info, M_Best.lat, M_Best.long, 9],
		[M_Shadani.info, M_Shadani.lat, M_Shadani.long, 10],
		[M_Evertrust.info, M_Evertrust.lat, M_Evertrust.long, 11],
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