@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_bba',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- Affiliation Section Start -->
    <div class=" container ">
        <div class="row shadow">
            <div class="col-lg-12">
                <div class="w_content">
                    <div class=" border border-0 p-3 ">
                        <div class="section-title">
                            <h2 class=" text-danger text-center" data-aos="fade-up" data-aos-delay="300">Even Semester </h2>
                            <h4 class=" text-danger text-center" data-aos="fade-up" data-aos-delay="300">January – June, Session: 2025-26 </h4>
                            <h3 class=" text-danger text-center" data-aos="fade-up" data-aos-delay="300">BBA (2nd & 4th Semester) </h3>

                            <hr>
                        </div>
                        <section class="section m-t-0 w-tj pt-0">
                           <div class="container"> 
                            <div class="row">
                                
                            <div class="co-md-12">
                                
                     
                               <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>S.N</th>
                                            <th>Semester</th>
                                            <th>calendar  </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                    <td>1</td>
                                                    <td>BBA Academic 2th Sem.</td>
                                                    <td><a href="{{ asset('../../../PDF/bba_ac.pdf') }}" target="_blank"><button type="button" class="btn btn-danger "> View </button></a></td>
                                              </tr>
                                              <tr>
                                                    <td>2</td>
                                                    <td>BBA Academic 4th Sem.</td>
                                                    <td><a href="{{ asset('../../../PDF/bba_ac.pdf') }}" target="_blank"><button type="button" class="btn btn-danger">View </button></a></td>
                                              </tr>
                                              
                                        </tbody>
                                  </table>


                            </div>

                            </div>
                           

                           </div>
                           
                        </section>

         <!--  <section class="section m-t-0 w-tj pt-0">
                            <div class="row d-flex justify-content-center" style='text-transform:uppercase;'>
                                <div class="col-md-4 sm-12 shadow-sm text-center py-4" data-aos="fade-up" data-aos-delay="400">
                                    <h5><a class="text-decoration-none text-dark" target="_blank" href="#"></a></h5>
                                </div>
                                <div class="col-md-4 sm-12 shadow-sm text-center py-4" data-aos="fade-up" data-aos-delay="600">
                                    <h5><a target="_blank" class="text-decoration-none text-dark" href="{{ url('../../../mou') }}">MOU with Scortek India Pvt Ltd</a></h5>
                                </div>
                                <div class="col-md-4 sm-12 shadow-sm text-center py-4" data-aos="fade-up" data-aos-delay="600">
                                    <h5><a target="_blank" class="text-decoration-none text-dark" href="#"></a></h5>
                                </div>
                            </div>
                           
                        </section> -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Affiliation Section Ends -->
@endsection
