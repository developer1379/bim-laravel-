<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM - Gallery</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar1')
    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery-BIM</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.jpg') }}">
    @include('includes.head_links')
    <script src="{{ asset('Includes/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('Includes/index.css') }}" />
    <style>
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
        }

        /* Modal Image Styling */
        .modal-content img {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        
     

    </div>
    <div class="container py-4">
       <!-- <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Placement Drive </h3>-->

       <div class="col-md-2"></div>
       <div class="col-md-8">
           
           <img src="{{ asset('Images/courses_offered.jpeg') }}" class="img-rounded img-thumbnail text-center" alt="recruter" title="recruter" style="margin: 10px 150px !important;">


       </div>
       <div class="col-md-2"></div>
         

          


        <!--<div class="row g-4">
            <script>
                let galleryHtml = '';
                for (let i = 1; i <= 4; i++) {
                    galleryHtml += `
                        <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img class="gallery-img" src="{{ asset('Images/cgc/${i}.jpeg') }}" alt="Gallery Image ${i}" onclick="openModal(this.src)">
                        </div>
                    `;
                }
                document.write(galleryHtml);
            </script>
        </div>--->
    </div>

    <!-- Modal for Full Image View -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" src="{{ url('') }}" alt="Full Image">
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(imageSrc) {
            document.getElementById("modalImage").src = imageSrc;
            var imageModal = new bootstrap.Modal(document.getElementById("imageModal"));
            imageModal.show();
        }
    </script>
</body>

</html>

    @include('includes.footer')
    @include('includes.body_links')
    <script src="{{ asset('Includes/script.js') }}"></script>
</body>

</html>