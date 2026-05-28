<?php echo view('pages.uncategorized.header'); ?>
<div class="container mt-4">
    <h2 class="text-center mb-4">ATM</h2>

    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3>Comfortable Accommodation</h3>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum. Our hostel provides spacious and well-maintained rooms with all essential amenities. Each room is designed to offer comfort and privacy while fostering a community living environment.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('slider/slide1.png') }}" class="img-fluid" alt="Hostel Room">
        </div>
    </div>
   
</div>
@include('includes.footer')
</body>
</html>
