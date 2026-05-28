<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM - BSM</title>
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
    <title>Gallery - BIHM</title>
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
    <div class="container py-4">
        <h3 class="text-center mb-4 text-uppercase" data-aos="fade-up" data-aos-delay="200">Buddha Sharad Mahotsav </h3>
        <hr>
        
        <p class="text-justify"> <strong>Buddha Sharad Mahotsav </strong> is a flagship annual event of <strong>Buddha group of institutions (BGI)</strong>, organized in every odd semester of the academic session. The event serves as a vibrant platform to celebrate talent, creativity, and student engagement while fostering a spirit of innovation and collaboration.
A key highlight of the Mahotsav is TechYuva, which features model and poster presentation competitions, encouraging students to showcase their innovative ideas, research aptitude, and problem-solving skills. In addition, a range of skill-based competitions are organized to enhance practical abilities and overall personality development.
The event also includes an energetic Fresher Party, warmly welcoming new students into the BIM family and providing them with an opportunity to interact, connect, and showcase their talents.
Buddha Sharad Mahotsav reflects the institute’s commitment to holistic development by blending academic excellence with cultural vibrancy, making it a memorable and enriching experience for all participants.

        </p>
        <hr>
        <div class="row g-4">
            <!--<script>
                let galleryHtml = '';
                for (let i = 1; i <= 16; i++) {
                    galleryHtml += `
                        <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img class="gallery-img" src="{{ asset('Images/Gallery/${i}.jpeg') }}" alt="Gallery Image ${i}" onclick="openModal(this.src)">
                        </div>
                    `;
                }
                document.write(galleryHtml);
            </script>-->

<table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>S.N</th>
                                            <th>Programm</th>
                                            <th>Year</th>
                                            <th>Social Media Link </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                               
                                                    <td>1</td>
                                                    <td>Buddha Sharad Mahotsav</td>
                                                    <td>2025</td>
                                                  
                                                    <td><a href="https://www.facebook.com/share/p/1Ao3TCXACT/" target="_blank"><button type="button" class="btn btn-danger "> View </button></a></td>
                                              </tr>
                                              
                                             
                                              
                                             
                                              
                                        </tbody>
                                  </table>

        </div>
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