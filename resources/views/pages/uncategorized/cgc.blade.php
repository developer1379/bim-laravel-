<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM - CGC</title>
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
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Change of Guard Cereony </h3>

         <p class="text-justify" style="text-align: justify-all;"> The Buddha Institute of Management (BIM) organized the prestigious Buddha Achievers Award Ceremony on 1st March 2026 with great enthusiasm and grandeur. During the ceremony, students were honored with Topper Awards and Best Attendance Awards for their outstanding academic performance and discipline.
A special attraction of the event was the Change of Guard Ceremony, which was conducted with pride and dignity. During this ceremony, newly selected student representatives and office bearers formally took over their responsibilities from the outgoing team. The event symbolized leadership, discipline, teamwork, and the spirit of responsibility among students. Faculty members and guests appreciated the confidence and dedication shown by the students during the ceremony. Institute Director Dr. Abhishek Tripathi also congratulated the students and encouraged them to continue working with dedication and leadership spirit
This ceremony fosters a sense of ownership, discipline, and leadership development, ensuring a smooth transition and strengthening the institute’s student governance framework

</p>
        <div class="row g-4">
           <!-- <script>
                let galleryHtml = '';
                for (let i = 1; i <= 4; i++) {
                    galleryHtml += `
                        <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img class="gallery-img" src="{{ asset('Images/cgc/${i}.jpeg') }}" alt="Gallery Image ${i}" onclick="openModal(this.src)">
                        </div>
                    `;
                }
                document.write(galleryHtml);
            </script>-->
        </div>
<hr>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Event Session</th>
      <th scope="col">Event Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2026</td>
      <td><a href="{{ asset(' https://www.instagram.com/p/DYTwZMukcjm/?igsh=MTYxNDV3Nzhsc3U5eQ==') }}" target="_blank" class="btn btn-danger"> Change of Guard Cereony </a></td>
    </tr>
    
    
  </tbody>
</table>
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