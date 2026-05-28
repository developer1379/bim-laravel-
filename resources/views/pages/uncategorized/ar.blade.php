<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM-Aptitude Reasoning</title>
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
    <div class="container py-4">
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Aptitudes & Reasoning  </h3>

         <p class="text-justify" style="text-align: justify-all;"> Aptitude
Aptitude is a person’s natural ability or skill to learn and perform a particular type of work or activity. It shows how quickly and effectively someone can develop knowledge or solve problems in a specific area.<br>

Examples:<br>

<ul>
    <li>Numerical aptitude → ability to work with numbers</li>
<li>Verbal aptitude → ability to understand language</li>
<li>Mechanical aptitude → ability to understand machines</li>
</ul>

<strong> Reasoning</strong><br>
Reasoning is the mental process of thinking logically to make decisions, solve problems, or draw conclusions from given information.
<br>
<strong>Types of reasoning:</strong>

<ul>
    <li>Logical reasoning</li>
<li>Analytical reasoning</li>
<li>Verbal reasoning</li>
<li>Non-verbal reasoning</li>

</ul>

<strong>In simple words:</strong><br>

<ul>
    <li>Aptitude measures potential and capability.</li>
    <li>Reasoning measures logical thinking and problem-solving ability.</li>
</ul>

</p>
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