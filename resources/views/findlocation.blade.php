@extends('layouts.main') 

@section('content') 

<section id="find-place" class="find-place section">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">

          <div class="text-center" style="margin-bottom: 35px;">
            <h3>Find Prayer Place</h3>
          </div>
          <div class="row">
            <div class="col-md-4">
              <select id="district-filter" name="district_id" class="form-control">
                <option class="text-center" value="">-- Pilih Kecamatan --</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}" {{ old('district_id') == $district->id ? 'selected' : '' }}>
                        {{ $district->name }}
                    </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <select id="religion-filter" name="religion_id" class="form-control">
                <option class="text-center" value="">-- Pilih Jenis Bangunan --</option>
                @foreach ($religions as $religion)
                    <option value="{{ $religion->id }}" {{ old('religion_id') == $religion->id ? 'selected' : '' }}>
                        {{ $religion->description }}
                    </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <button id="reset-filters" class="btn btn-secondary">Reset Filters</button>
            </div>
          </div>

          <hr>

          <div id='map' style='width: 100%; height: 400px;'></div>

        </div>
      </div>
    </div>
</section>

<script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel='stylesheet' />
    
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  // API-SIG // mapboxgl.accessToken = 'sk.eyJ1Ijoicml6a2lwdWppIiwiYSI6ImNtNzFldG5hODA0MTUya3NmbzU1ZzNsOWYifQ.8oqO8YXp6gSTEALKjiXaGw';
  mapboxgl.accessToken = 'pk.eyJ1Ijoicml6a2lwdWppIiwiYSI6ImNtNWh1djU0NzBvaW0ybXExeHd4N2lodGcifQ.lfwNAmqIlwfgwburjeHvhw';
  const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/outdoors-v11',
    center: [107.5892559, -6.9010636],
    zoom: 11,
  });

  let allLocations = []; 
  let markers = []; 
  let districtOptions = [];
  let religionOptions = []; 

  fetch("{{ url('getlocations') }}") 
  .then(response => response.json())
  .then(data => {
    allLocations = data.data;
    displayLocationsOnMap(allLocations); 

    districtOptions = [...new Set(allLocations.map(location => location.district_id))].map(districtId => ({
        value: districtId,
        text: `District ID ${districtId}`
    }));

    religionOptions = [...new Set(allLocations.map(location => location.religion_id))].map(religionId => ({
        value: religionId,
        text: `Religion ID ${religionId}`
    }));

      // Populate district filter
      const districtSelect = document.getElementById('district-filter');
      districtOptions.forEach(district => {
          const option = document.createElement('option');
          option.value = district.value;
          option.text = district.text;
          // districtSelect.appendChild(option);
      });

      // Populate religion filter
      const religionSelect = document.getElementById('religion-filter');
      religionOptions.forEach(religion => {
          const option = document.createElement('option');
          option.value = religion.value;
          option.text = religion.text;
          // religionSelect.appendChild(option);
      });
  })
  .catch(error => {
      console.error('Error fetching data:', error);
  });

function displayLocationsOnMap(locations) {
  markers.forEach(marker => marker.remove()); 
  markers = []; 

  locations.forEach(location => {
    var html = "<div>";
    html += "<h4>" + location.location_name + " </h4>";
    html += "<p>" + location.address + "<p>";
    html += "</div>";

    const marker = new mapboxgl.Marker()
      .setLngLat([location.longitude, location.latitude])
      .setPopup(new mapboxgl.Popup({
            offset: 50
        }).setHTML(html))
      .addTo(map);
    markers.push(marker); 
  });
}

document.getElementById('district-filter').addEventListener('change', function() {
  filterAndDisplayLocations();
});

document.getElementById('religion-filter').addEventListener('change', function() {
  filterAndDisplayLocations();
});

document.getElementById('reset-filters').addEventListener('click', function() {
    document.getElementById('district-filter').value = '';
    document.getElementById('religion-filter').value = '';
    filterAndDisplayLocations(); 
});

function filterAndDisplayLocations() {
  const selectedDistrictId = document.getElementById('district-filter').value;
  const selectedReligionId = document.getElementById('religion-filter').value;

  let filteredLocations = allLocations;

  if (selectedDistrictId) {
      filteredLocations = filteredLocations.filter(location => location.district_id == selectedDistrictId);
  }

  if (selectedReligionId) {
      filteredLocations = filteredLocations.filter(location => location.religion_id == selectedReligionId);
  }

  // console.log(filteredLocations);
  displayLocationsOnMap(filteredLocations); 
}
</script>

@endsection