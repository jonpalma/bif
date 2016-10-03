var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng(28.704000, -105.969204),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var markerAeropuertoChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng(28.704000, -105.969204),
		map: map,
		title: 'Aeropuerto Chihuahua',
		url: 'http://maps.google.com/maps?q=loc:'+String(28.704000)+','+String(-105.969204)
	});
	var markerPolitecnicoChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng(28.625259, -106.103363),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(28.625259)+','+String(-106.103363)
	});
	var markerHaciendaChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng(28.633562, -106.118660),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(28.633562)+','+String(-106.118660)
	});
	var markerValleEscondido = new google.maps.Marker({
		position: new google.maps.LatLng(28.6554624,-106.1493592),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(28.6554624)+','+String(-106.1493592)
	});
	var markerJuarez = new google.maps.Marker({
		position: new google.maps.LatLng(31.658302, -106.429568),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(31.658302)+','+String(-106.429568)
	});
	var markerRositaCoahuila = new google.maps.Marker({
		position: new google.maps.LatLng(25.525211, -103.415608),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(25.525211)+','+String(-103.415608)
	});
	var markerGomezCoahuila = new google.maps.Marker({
		position: new google.maps.LatLng(25.553224, -103.492089),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(25.553224)+','+String(-103.492089)
	});
	var markerAeropuertoCoahuila = new google.maps.Marker({
		position: new google.maps.LatLng(25.565015, -103.402055),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(25.565015)+','+String(-103.402055)
	});
	var markerBosquesNuevoLeon = new google.maps.Marker({
		position: new google.maps.LatLng(25.635385, -100.367113),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(25.635385)+','+String(-100.367113)
	});
	var markerLagosNuevoLeon = new google.maps.Marker({
		position: new google.maps.LatLng(25.601644, -100.265516),
		map: map,
		title: 'Hacienda del Valle',
		url: 'http://maps.google.com/maps?q=loc:'+String(25.601644)+','+String(-100.265516)
	});

	google.maps.event.addListener(markerAeropuertoChihuahua, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerHaciendaChihuahua, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerPolitecnicoChihuahua, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerValleEscondido, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerJuarez, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerRositaCoahuila, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerGomezCoahuila, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerAeropuertoCoahuila, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerBosquesNuevoLeon, 'click', function() {
		window.open(this.url,'_blank');
	});
	google.maps.event.addListener(markerLagosNuevoLeon, 'click', function() {
		window.open(this.url,'_blank');
	});

}

function moveToAeropuertoChihuahua() {
	map.panTo(new google.maps.LatLng(28.704000, -105.969204));
}
function moveToPolitecnicoChihuahua() {
	map.panTo(new google.maps.LatLng(28.625259, -106.103363));
}
function moveToHaciendaChihuahua() {
	map.panTo(new google.maps.LatLng(28.633562, -106.118660));
}
function moveToValleEscondido() {
	map.panTo(new google.maps.LatLng(28.6554624,-106.1493592));
}
function moveToJuarez() {
	map.panTo(new google.maps.LatLng(31.658302, -106.429568));
}
function moveToRositaCoahuila() {
	map.panTo(new google.maps.LatLng(25.525211, -103.415608));
}
function moveToGomezCoahuila() {
	map.panTo(new google.maps.LatLng(25.553224, -103.492089));
}
function moveToAeropuertoCoahuila() {
	map.panTo(new google.maps.LatLng(25.565015, -103.402055));
}
function moveToBosquesNuevoLeon() {
	map.panTo(new google.maps.LatLng(25.635385, -100.367113));
}
function moveToLagosNuevoLeon() {
	map.panTo(new google.maps.LatLng(25.601644, -100.265516));
}