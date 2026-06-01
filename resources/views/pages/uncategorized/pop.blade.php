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
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.jpg') }}">
    
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
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Parents’ Orientation Program </h3>

         <p class="text-justify" style="text-align: justify-all;"> The Parents’ Orientation Program is to build a strong partnership between the institute and parents at the beginning of the academic journey. The program familiarizes parents with the institute’s vision, academic structure, university affiliations, rules, and the facilities provided for students’ overall development.
During the session, parents interact with the management, faculty members, and administrative team, gaining insights into teaching methodologies, evaluation processes, discipline policies, and student support systems. It also serves as a platform to address queries and align expectations regarding students’ academic progress and career growth.
The program strengthens trust and collaboration, ensuring a supportive environment that contributes to the holistic development and success of every student

   

    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>S.N</th>
                                            <th>Program</th>
                                            <th>facebook Link</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                               
                                                    <td>1</td>
                                                    <td>Parents orientation</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122360379488003050/?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><button type="button" class="btn btn-danger ">click to view </button></a></td>
                                              </tr>
                                              <!--<tr>
                                                    <td>2</td>
                                                    <td>BBA Dekshaarmbh</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122358705758003050/?mibextid=rS40aB7S9Ucbxw6v"><button type="button" class="btn btn-danger">click to view </button></a></td>
                                              </tr>

                                              <tr>
                                                    <td>3</td>
                                                    <td>Computer Application Dekshaarmbh</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122358556358003050/?mibextid=rS40aB7S9Ucbxw6v"><button type="button" class="btn btn-danger">click to view </button></a></td>
                                              </tr>-->
                                          

                                             
                                              
                                        </tbody>
                                  </table>
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
@endsection
