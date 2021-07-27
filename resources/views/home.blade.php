@extends('layout')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="anonymous"/>

<style type="text/css">
html, body {
	padding: 0;
	margin: 0;
	height: 100vh;
}
.label-sekolah {
	white-space: nowrap;
   	color: black;
}
</style>
@endpush

@section('content')
<main role="main" class="m-0 p-0 h-75">
	<div class="row p-0 m-0 h-100 align-items-center justify-content-center">
		<div id="map" class="col-10 h-100">
		
		</div>
	</div>
</main>
@endsection

@push('js')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="anonymous"></script>
<script type="text/javascript">
	var map = L.map('map').setView([-6.9359289,106.92215095], 13);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var infoModalElement = new bootstrap.Modal(document.querySelector('#modal-info'));
	var infoModalTitleElement = document.querySelector("#modal-info-label");
	var infoModalHtmlElement = document.querySelector("#modal-info .modal-body");

	@foreach ($data as $d)
		L.marker([{{ $d->latitude }}, {{ $d->longitude}}]).addTo(map)
			.bindTooltip('<b>{{ $d->name }}</b>', {
				permanent: true, 
			})
			.openTooltip()
			.on('click', () => {
				document.querySelector("#modal-info-foto").src = '{{ \Storage::url($d->foto) }}'
				document.querySelector("#modal-info label[name='name']").innerText = '{{ $d->name }}';
				document.querySelector("#modal-info label[name='alamat']").innerText = '{{ $d->alamat }}';
				document.querySelector("#modal-info label[name='npsn']").innerText = '{{ $d->npsn }}';
				document.querySelector("#modal-info label[name='latitude']").innerText = '{{ $d->latitude }}';
				document.querySelector("#modal-info label[name='longitude']").innerText = '{{ $d->longitude }}';
				document.querySelector("#modal-info label[name='description']").innerText = '{{ $d->description }}';

				infoModalElement.show();
			})
	@endforeach
</script>
@endpush