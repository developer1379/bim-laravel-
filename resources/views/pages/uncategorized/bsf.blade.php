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
    <title>BSF - BIHM</title>
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
        <h3 class="text-center mb-4" data-aos="fade-up" data-aos-delay="200">Buddha Spring Festival </h3>

        <hr>
        
        <p class="text-justify"><strong> Buddha Spring Festival</strong> is a distinguished annual celebration of <strong>Buddha group of institutions (BGI)</strong>, conducted in every even semester of the academic session. The festival serves as a comprehensive platform that seamlessly integrates sportsmanship, cultural expression, and academic recognition, reflecting the institute’s commitment to holistic education.
The event hosts a wide spectrum of sports competitions, fostering discipline, teamwork, and a spirit of healthy competition among students. Complementing this, a series of cultural and co-curricular activities provide an avenue for creative expression, talent showcase, and personality development.
A defining highlight of the festival is the Award Distribution Ceremony, where meritorious students are formally honored for their achievements across academic excellence, sports performance, and extracurricular contributions. This recognition not only celebrates success but also inspires a culture of aspiration and continuous improvement.
Buddha Spring Festival embodies the ethos of BGI by cultivating an environment that encourages participation, celebrates achievement, and nurtures well-rounded individuals prepared for both professional and personal success.


        </p>
        <hr>

        <div class="row g-4">
            <!--<script>
                let galleryHtml = '';
                for (let i = 1; i <= 12; i++) {
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
                                                    <td>Buddha Spring Festival</td>
                                                    <td>2025</td>
                                                  
                                                    <td><a href="https://www.facebook.com/share/p/18QadBh6Ki/" target="_blank"><button type="button" class="btn btn-danger "> View </button></a></td>
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