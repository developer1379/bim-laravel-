@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_mba',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- Affiliation Section Start -->
    <div class="container py-4">
       <!-- <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Placement Drive </h3>-->

   <div class="row g-4">

        <img src="{{ asset('../../../images/rec.jpeg') }}" class="img-fluid" alt="Responsive image">
    </div>
   
     
       
      
         

          


        <!--<div class="row g-4">
            <script>
                let galleryHtml = '';
                for (let i = 1; i <= 4; i++) {
                    galleryHtml += `
                        <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img class="gallery-img" src="{{ asset('../../../Images/cgc/${i}.jpeg') }}" alt="Gallery Image ${i}" onclick="openModal(this.src)">
                        </div>
                    `;
                }
                document.write(galleryHtml);
            </script>
        </div>--->
    </div>
    <!-- Affiliation Section Ends -->
@endsection
