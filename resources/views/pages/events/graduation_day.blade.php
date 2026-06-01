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
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Graduation Day Ceremony </h3>

         <p class="text-justify" style="text-align: justify-all;"> The Graduation Day Ceremony is a prestigious occasion that marks the successful completion of academic programs and celebrates the achievements of graduating students. The event is organized to formally confer degrees and recognize the hard work, dedication, and perseverance demonstrated by students throughout their academic journey.
Held in a grand and dignified manner, the ceremony includes the presence of institute leadership, faculty members, distinguished guests, and proud parents. Students are honored on stage, creating a memorable milestone as they step into the professional world.
This ceremony not only celebrates academic success but also inspires students to uphold the values and excellence instilled by the institute as they embark on their future careers.


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
                                                    <td>Graduation Day Ceremony</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122363429990003050/?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><button type="button" class="btn btn-danger ">click to view </button></a></td>
                                              </tr>
                                              <!--<tr>
                                                    <td>2</td>
                                                    <td>Graduation Day Ceremony</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122364053648003050/?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><button type="button" class="btn btn-danger">click to view </button></a></td>
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
