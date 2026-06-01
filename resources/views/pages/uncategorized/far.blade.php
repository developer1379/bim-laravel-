@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
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
@endpush

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery-BIM</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.jpg') }}">
    
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
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Faculty Activity and Reporting  </h3>

         <p class="text-justify" style="text-align: justify;"> <strong>Session on “The Vital Role of Research in Faculty Development”</strong> <br>

          Buddha Institute of Management (BIM), under the aegis of Buddha Group of Institutions, successfully organized an insightful academic session on “The Vital Role of Research in Faculty Development” on 15th January 2025 for faculty members across Management, Engineering, and Sciences.
The session emphasized the significance of research as a cornerstone of academic excellence and institutional growth. It highlighted the need to integrate research with teaching practices to enrich learning outcomes and promote a research-driven academic environment.
Key deliberations during the session included practical strategies for faculty members to actively engage in meaningful research alongside their academic responsibilities, the importance of interdisciplinary collaboration to address contemporary challenges, and the role of research in enhancing professional competence and career advancement.
The session witnessed enthusiastic participation from faculty members, reflecting their strong commitment to continuous learning, innovation, and academic excellence.
BIM remains dedicated to fostering a robust research culture and encourages its faculty to contribute to knowledge creation, thereby shaping competent and future-ready learners.


        </p>

         <div class="row g-4">
            <script>
                let galleryHtml = '';
                for (let i = 1; i <= 2; i++) {
                    galleryHtml += `
                        <div class="col-lg-6 col-md-6 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img class="gallery-img" src="{{ asset('images/fdp/${i}.jpeg') }}" alt="Gallery Image ${i}" onclick="openModal(this.src)">
                        </div>
                    `;
                }
                document.write(galleryHtml);
            </script>
        </div>
        <br>
      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>S.N</th>
                                            <th>Program</th>
                                            <th>view</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                               
                                                    <td>1</td>
                                                    <td>Atal FDP Media </td>
                                                    <td><a href="{{ asset('PDF/Atal_FDP_Media.pdf') }}" target="_blank"><button type="button" class="btn btn-danger ">click to view </button></a></td>
                                              </tr>
                                              <tr>
                                                    <td>2</td>
                                                    <td>FDP Program Photo</td>
                                                    <td><a href="{{ asset('PDF/FDP_Program_Photo.pdf') }}" target="_blank"><button type="button" class="btn btn-danger">click to view </button></a></td>
                                              </tr>

                                              <tr>
                                                    <td>3</td>
                                                    <td>resource person</td>
                                                    <td><a href="{{ asset('PDF/resource_person.pdf') }}" target="_blank"><button type="button" class="btn btn-danger">click to view </button></a></td>
                                              </tr>
                                          

                                             
                                              
                                        </tbody>
                                  </table>

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
@endsection
