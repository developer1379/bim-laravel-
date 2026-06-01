@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- Placement Section Start -->
    <div class="container placement-cell">
            <div class="row my-3 d-flex justify-content-center">
                <h2 class="text-center">PROUD ALUMNI</h2>

               
               <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">S.No.</th>
                                  <th scope="col">Name of Students</th>
                                  <th scope="col">Department</th>
                                  <th scope="col">Batch</th>
                                  <th scope="col">Company Name and Location</th>
                                  <th scope="col">Package</th> 
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Aditya Kumar Singh</td>
                                  <td>MBA</td>
                                  <td>2023-25</td>
                                  <td>Indian Compressor Ltd., Noida</td>
                                  <td>8 LPA</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Sneha Pandey</td>
                                  <td>MBA</td>
                                  <td>2023-25</td>
                                  <td>Welspun GCC, Ahmedabad</td>
                                  <td>6 LPA</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Atrish Shukla</td>
                                  <td>MBA</td>
                                   <td>2023-25</td>
                                  <td>Seed Fincap Pvt. Ltd., Gurugram</td>
                                  <td>4.5 LPA</td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>Vachaspati Ojha</td>
                                  <td>MBA</td>
                                   <td>2023-25</td>
                                  <td>Seed Fincap Pvt. Ltd., Gurugram</td>
                                  <td>4.5 LPA</td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>Ratnesh Kumar</td>
                                  <td>MBA</td>
                                   <td>2023-25</td>
                                  <td>Seed Fincap Pvt. Ltd., Gurugram</td>
                                  <td>4.5 LPA</td>
                                </tr>
                               
                              </tbody>
                </table>

            </div>
        </div>
    <!-- Placement Section Ends -->
@endsection
