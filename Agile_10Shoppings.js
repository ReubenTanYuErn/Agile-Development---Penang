function initMap() {
	
	var S_BatuFerringhi = {
		info:'<strong>Batu Feringghi Night Market</strong><br>\
				Address: Jalan Pantai Batu, Taman Pantai Batu, 11200 Tanjong Bungah, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/suunZbWmJqr">Click here to get directions</a>',
				lat: 5.473059, 
				long: 100.247429
	};
	
	var S_LittlePenang = {
		info: '<strong>Little Penang Street Market</strong><br>\
				Address: George Town, 1, Jalan Penang, George Town, 10000 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/GkrFW9BbbtM2">Click here to get directions</a>',
				lat: 5.422868, 
				long: 100.335781
	};
	
	var S_PranginMall = {
		info: '<strong>Prangin Mall</strong><br>\
				Address: 228, Jalan Macalister, George Town, 11400 George Town, Pulau Pinang. <br>\
				<a href="https://goo.gl/maps/rRRgFopHc6J2">Click here to get directions</a>',
				lat: 5.414940 , 
				long: 100.331046
	};
	
	var S_PenangTimesSquare = {
		info: '<strong>Penang Times Square</strong><br>\
				Address: 144, Jalan Dato Keramat, George Town, 10150 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/qs3RS8SAYmm">Click here to get directions</a>',
				lat: 5.412290, 
				long: 100.325373
	};
	
	var S_StraitsQuay = {
		info: '<strong>Straits Quay Marina Mall</strong><br>\
				Address: Jalan Seri Tanjung Pinang 10470 Tanjong Tokong, Penang Malaysia, Seri Tanjung Pinang, Tanjung Tokong, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/qiXqHMYPbD52">Click here to get directions</a>',
				lat: 5.458215, 
				long: 100.313153
	};
	
	var S_AutoCity = {
		info: '<strong>Auto-City</strong><br>\
				Address: 1688, Jalan Perusahaan, Highway Auto-city, 14000 Perai, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/gPxCS6MNpgm">Click here to get directions</a>',
				lat: 5.337902, 
				long: 100.431576
	};
	
	var S_QueensbayMall = {
		info: '<strong>Queensbay Mall</strong><br>\
				Address: 100, Persiaran Bayan Indah, Queens Bay, 14300 Bayan Lepas, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/gPVuaigfvVM2">Click here to get directions</a>',
				lat: 5.334633, 
				long: 100.306578
	};
	
	var S_1stAvenue = {
		info: '<strong>1st Avenue Penang</strong><br>\
				Address: 128, Jalan Magazine, George Town, 10300 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/Wjy4R62pt8o">Click here to get directions</a>',
				lat: 5.413196, 
				long: 100.331233
	};
	
	var  S_ChowrastaBazaar = {
		info: '<strong>Chowrasta Bazaar</strong><br>\
				Address: 1-33, Jalan Chowrasta, George Town, 10200 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/HQgrFJw33C52">Click here to get directions</a>',
				lat: 5.417689, 
				long: 100.332043
	};
	
	var S_GurneyPlaza = {
		info: '<strong>Gurney Plaza</strong><br>\
				Address: 170, Persiaran Gurney, Pulau Tikus, 10250 George Town, Pulau Pinang.<br>\
				<a href="https://goo.gl/maps/hJrnzeatrY32">Click here to get directions</a>',
				lat: 5.438341, 
				long: 100.310007
	};
	
	
	
	var locations = [
		[S_BatuFerringhi.info, S_BatuFerringhi.lat, S_BatuFerringhi.long, 0],
		[S_LittlePenang.info, S_LittlePenang.lat, S_LittlePenang.long, 1],
		[S_PranginMall.info, S_PranginMall.lat, S_PranginMall.long, 2],
		[S_PenangTimesSquare.info, S_PenangTimesSquare.lat, S_PenangTimesSquare, 3],
		[S_StraitsQuay.info, S_StraitsQuay.lat, S_StraitsQuay.long, 4],
		[S_AutoCity.info, S_AutoCity.lat, S_AutoCity.long, 5],
		[S_QueensbayMall.info, S_QueensbayMall.lat, S_QueensbayMall.long, 6],
		[S_1stAvenue.info, S_1stAvenue.lat, S_1stAvenue.long, 7],
		[S_ChowrastaBazaar.info, S_ChowrastaBazaar.lat, S_ChowrastaBazaar.long, 8],
		[S_GurneyPlaza.info, S_GurneyPlaza.lat, S_GurneyPlaza.long, 9],
		
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