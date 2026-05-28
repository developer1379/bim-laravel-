<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM - English Speaking</title>
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
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">English Speaking </h3>
        <hr>

         <p class="text-justify" style="text-align: justify-all;"> English Speaking Classes Started at 
Buddha Institute of Management is pleased to announce the launch of its English Speaking & Personality Development Program for students, job seekers, professionals, and individuals who want to improve their communication skills and confidence.

This specially designed course focuses on helping participants speak English fluently, confidently, and correctly in daily life, interviews, presentations, and professional environments. Along with spoken English, the program also develops personality, communication style, body language, and public speaking skills.
<hr>
<br>
<strong>Course Highlights</strong>
<ul>
    <li>Basic to Advanced Spoken English</li>
    <li>Grammar Improvement & Vocabulary Building</li>
    <li>Daily Conversation Practice</li>
    <li>Group Discussions & Public Speaking</li>
    <li>Interview Preparation</li>
    <li>Personality Development Sessions</li>
    <li>Confidence Building Activities</li>
    <li>Presentation & Communication Skills</li>
    <li>Body Language & Etiquette Training</li>
    <li>Pronunciation & Fluency Practice</li>
</ul>
<br>

<strong>Benefits of the Program</strong>
<ul>
    <li>Speak English with confidence</li>
    <li>Improve personality and communication</li>
    <li>Prepare for interviews and career growth</li>
    <li>Develop leadership and presentation skills</li>
    <li>Build self-confidence for social and professional life</li>
</ul>
<br>
<strong>Special Features</strong>
    <li>Experienced Trainers</li>
    <li>Interactive Classroom Sessions</li>
    <li>Practical Learning Environment</li>
    <li>Regular Speaking Activities</li>

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