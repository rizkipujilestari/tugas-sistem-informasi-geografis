@extends('layouts.main') 

@section('content') 

<section id="find-place" class="find-place section">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">

          <div class="text-center">
            <h3>Find Prayer Place</h3>
            <div id='map' style='width: 100%; height: 400px;'></div>

            <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
            <script>
              // API-SIG // mapboxgl.accessToken = 'sk.eyJ1Ijoicml6a2lwdWppIiwiYSI6ImNtNzFldG5hODA0MTUya3NmbzU1ZzNsOWYifQ.8oqO8YXp6gSTEALKjiXaGw';
              mapboxgl.accessToken = 'pk.eyJ1Ijoicml6a2lwdWppIiwiYSI6ImNtNWh1djU0NzBvaW0ybXExeHd4N2lodGcifQ.lfwNAmqIlwfgwburjeHvhw';
              const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/outdoors-v11',
                center: [107.5892559, -6.9010636],
                zoom: 11,
              });

              const locations = [
                  { latitude: -6.9010636, longitude: 107.5892559 }, // Bandung
                  { latitude: -6.9218295, longitude: 107.6044874 },
              ];

              locations.forEach(location => {
                new mapboxgl.Marker()
                .setLngLat([location.longitude, location.latitude])
                .addTo(map);
              });
              
            </script>
            
            {{-- <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9740616717145!2d107.6111822!3d-6.8937059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e650eb4f8499%3A0x5d08d070d6d3c906!2sSalman%20ITB%20Mosque!5e0!3m2!1sen!2sid!4v1739198062540!5m2!1sen!2sid" 
                frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width:100%; height:500px;"></iframe>
            </div><!-- End Google Maps --> --}}
          </div>

        </div>
      </div>
    </div>
</section>

@endsection