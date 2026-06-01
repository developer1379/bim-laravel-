@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_mba',
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
    <title>BBA Labs</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('../../../Images/logo.jpg') }}">
    
    <script src="{{ asset('../../../Includes/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('../../../Includes/index.css') }}" />
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
        <h3 class="text-center mb-4 text-uppercase" data-aos="fade-up" data-aos-delay="200">Conclave</h3>
        <hr>
       
        <div class="row g-4">
           <!-- <script>
                let galleryHtml = '';
                for (let i = 1; i <=35; i++) {
                    galleryHtml += `
                        <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img class="gallery-img" src="{{ asset('../../../Images/Gallery/conclave/${i}.jpeg') }}" alt="Gallery Image ${i}" onclick="openModal(this.src)">
                        </div>
                    `;
                }
                document.write(galleryHtml);
            </script>-->

<table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>S.N</th>
                                            <th> Event Session </th>
                                            <th>Conclave  &amp; Details  </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                    <td>1</td>
                                                    <td>2024-2025 </td>
                                                    <td><a href="https://www.facebook.com/share/1Xr623ctVV/" target="_blank"><button type="button" class="btn btn-danger "> View </button></a></td>
                                              </tr>
                                               <tr>
                                                    <td>2</td>
                                                    <td>2025-2026 </td>
                                                    <td><a href="https://www.facebook.com/share/p/1DxoizreP2/" target="_blank"><button type="button" class="btn btn-danger "> View </button></a></td>
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
@endsection
