@extends('layouts.main') 

@section('content') 

<section id="find-place" class="find-place section accent-background">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">

          <div class="text-center">
            <h3>Find Prayer Place</h3>
            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9740616717145!2d107.6111822!3d-6.8937059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e650eb4f8499%3A0x5d08d070d6d3c906!2sSalman%20ITB%20Mosque!5e0!3m2!1sen!2sid!4v1739198062540!5m2!1sen!2sid" 
                frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width:100%; height:500px;"></iframe>
            </div><!-- End Google Maps -->
          </div>

        </div>
      </div>
    </div>
</section>

@endsection