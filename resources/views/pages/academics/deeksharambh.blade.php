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
        <h3 class="text-center mb-4 text-danger" data-aos="fade-up" data-aos-delay="200">Deekashaarambh (Induction & Orientation Program) </h3>

         <p class="text-justify" style="text-align: justify-all;"> Deekashaarambh is the institute’s formal induction and orientation program to welcome newly admitted students and help them transition smoothly into academic and campus life. The program is designed to make students aware of the institute’s vision, academic structure, university affiliations, and the various programs offered.
Through interactive sessions, students are introduced to campus facilities, institutional policies, co-curricular opportunities, and support systems available to them. The event also provides an opportunity to interact with key authorities, faculty members, and administrative staff, fostering a sense of belonging and confidence from the very beginning.
Deekashaarambh lays the foundation for a meaningful academic journey by helping students become familiar, comfortable, and aligned with the institute’s culture and expectations.


</p>

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
                                                    <td>MBA Dekshaarmbh</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122358401372003050/?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><button type="button" class="btn btn-danger ">click to view </button></a></td>
                                              </tr>
                                              <tr>
                                                    <td>2</td>
                                                    <td>BBA Dekshaarmbh</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122358705758003050/?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><button type="button" class="btn btn-danger" >click to view </button></a></td>
                                              </tr>

                                              <tr>
                                                    <td>3</td>
                                                    <td>Computer Application Dekshaarmbh</td>
                                                    <td><a href="https://www.facebook.com/61550091507942/posts/122358556358003050/?mibextid=rS40aB7S9Ucbxw6v" target="_blank"><button type="button" class="btn btn-danger" >click to view </button></a></td>
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
