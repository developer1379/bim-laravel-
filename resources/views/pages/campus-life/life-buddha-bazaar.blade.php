@include('pages.uncategorized.header')

<div class="container mt-4">
    <h2 class="text-center mb-4">Buddha bazaar</h2>

    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3>Comfortable Accommodation</h3>
            <p>Our hostel provides spacious and well-maintained rooms with all essential amenities. Each room is designed to offer comfort and privacy while fostering a community living environment.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('slider/slide1.png') }}" class="img-fluid" alt="Hostel Room">
        </div>
    </div>

    <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
            <h3>Dining & Food Services</h3>
            <p>We offer nutritious and hygienic meals prepared in our modern kitchen. The hostel mess ensures a variety of delicious food options catering to different tastes and dietary requirements.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('slider/slide1.png') }}" class="img-fluid" alt="Dining Area">
        </div>
    </div>

    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3>Recreational Facilities</h3>
            <p>The hostel provides recreational spaces, including a common room, gym, and sports areas, ensuring students have opportunities to relax and unwind after their studies.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('slider/slide1.png') }}" class="img-fluid" alt="Recreational Facilities">
        </div>
    </div>
</div>

@include('includes.footer')
</body>
</html>

