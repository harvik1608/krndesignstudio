@extends('include.header')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
	#map {
		height: 75vh;
		width: 100%;
	}
</style>
<div class="row sales-cards">
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-primary flex-fill mb-4">
			<div class="mb-2">
				
			</div>
			<h3 class="counters" data-count="{{ $total_faqs }}">{{ $total_faqs }}</h3>
			<p>TOTAL FAQ</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-secondary flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_blogs }}">{{ $total_blogs }}</h3>
			<p>TOTAL BLOG</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-success flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_services }}">{{ $total_services }}</h3>
			<p>TOTAL SERVICE</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-info flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_projects }}">{{ $total_projects }}</h3>
			<p>TOTAL PROJECT</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-info flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_inquiries }}">{{ $total_inquiries }}</h3>
			<p>TOTAL INQUIRY</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-success flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_reasons }}">{{ $total_reasons }}</h3>
			<p>TOTAL REASON</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-secondary flex-fill mb-4">
			<div class="mb-2"></div>
			<h3 class="counters" data-count="{{ $total_pdfs }}">{{ $total_pdfs }}</h3>
			<p>TOTAL PDF</p>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12 d-flex">
		<div class="card color-info bg-primary flex-fill mb-4">
			<div class="mb-2">
				
			</div>
			<h3 class="counters" data-count="{{ $total_sites }}">{{ $total_sites }}</h3>
			<p>TOTAL Site</p>
		</div>
	</div>
	<div style="margin-bottom: 10px;">
		<label for="yearFilter">Year:</label>
		<select id="yearFilter" onchange="updateMap()">
			<option value="">All Years</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
		</select>

		<label for="statusFilter" style="margin-left: 20px;">Status:</label>
		<select id="statusFilter" onchange="updateMap()">
			<option value="">All Statuses</option>
			<option value="BC - Complete">BC - Complete</option>
			<option value="BC - in Works">BC - in Works</option>
			<option value="BC - Live">BC - Live</option>
			<option value="PA Approved">PA Approved</option>
			<option value="PA Submitted">PA Submitted</option>
			<option value="PA - Live">PA - Live</option>
		</select>
	</div>
	<div class="col-xl-12 col-sm-12 col-12 d-flex">
		<div id="map"></div>
	</div>
</div>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
	var page_title = "Dashboard";
	const locations = <?php echo $locations; ?>; // Must include "year" and "status" fields

	// Initialize map
	const map = L.map('map').setView([locations[0].lat, locations[0].lng], 7);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '© OpenStreetMap contributors'
	}).addTo(map);

	// Custom marker icon
	const coloredMarker = (color) => L.divIcon({
		className: "custom-marker",
		html: `
			<svg width="30" height="40" viewBox="0 0 30 40">
				<path d="M15 0C7 0 0 7 0 15c0 11.25 15 25 15 25s15-13.75 15-25C30 7 23 0 15 0z"
				      fill="${color}" stroke="white" stroke-width="2"/>
			</svg>
		`,
		iconAnchor: [15, 40],
		popupAnchor: [0, -35],
	});

	let markersLayer = L.layerGroup().addTo(map);

	function getStatusColor(status) {
		switch (status) {
			case 'BC - Complete': return '#273d54';
			case 'BC - in Works': return '#86929e';
			case 'BC - Live': return '#c2c9d1';
			case 'PA Approved': return '#c57fbe';
			case 'PA Submitted': return '#d8a9d5';
			case 'PA - Live': return '#ebd3e9';
			default: return '#FF0000';
		}
	}

	function renderMarkers(filteredLocations) {
		markersLayer.clearLayers();

		filteredLocations.forEach(loc => {
			const color = getStatusColor(loc.status);
			L.marker([loc.lat, loc.lng], { icon: coloredMarker(color) })
				.addTo(markersLayer)
				.bindPopup(`
					<strong>${loc.name}</strong><br>
					Status: ${loc.status}<br>
					Year: ${loc.year}
				`);
		});
	}

	function updateMap() {
		const selectedYear = document.getElementById("yearFilter").value;
		const selectedStatus = document.getElementById("statusFilter").value;

		let filtered = locations;

		// Apply filters
		if (selectedYear) {
			filtered = filtered.filter(loc => loc.year == selectedYear);
		}
		if (selectedStatus) {
			filtered = filtered.filter(loc => loc.status == selectedStatus);
		}

		renderMarkers(filtered);
	}

	// Initial render
	renderMarkers(locations);
</script>
@endsection
