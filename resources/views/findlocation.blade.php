@extends('layouts.main') 

@section('content') 

<section id="find-place" class="find-place section">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">

          <div class="text-center">
            <h3>Find Prayer Place</h3>
            <div id='map' style='width: 100%; height: 400px;'></div>
          </div>

        </div>
      </div>
    </div>
</section>

<script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
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

  // const locations = [
  //     { latitude: -6.9010636, longitude: 107.5892559 }, // Bandung
  //     { latitude: -6.9218295, longitude: 107.6044874 },
  // ];

  // locations.forEach(location => {
  //   new mapboxgl.Marker()
  //   .setLngLat([location.longitude, location.latitude])
  //   .addTo(map);
  // });

  fetch("{{ url('getlocations') }}") // Replace with your API endpoint
  .then(response => response.json())
  .then(data => {
      console.log(data.data);

      data.data.forEach(location => {
        var html = "<div> <br>";
        html += "<b>" + location.location_name + " </b>";
        html += "<p>" + location.address + "<p>";
        html += "</div>";

        new mapboxgl.Marker()
        .setLngLat([location.longitude, location.latitude])
        .setPopup(new mapboxgl.Popup({
              offset: 50
          }).setHTML(html))
        .addTo(map);
      });
  })
  .catch(error => {
      alert('error');
      console.error('Error fetching data:', error);
  });
  
</script>

@endsection