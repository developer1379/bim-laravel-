<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acadmic Calendar - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link href='https://unpkg.com' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar1')

    <!-- Affiliation Section Start -->
    <div class=" container ">
        <div class="row shadow">
            <div class="col-lg-12">
                <div class="w_content">
                    <div class=" border border-0 p-3 ">
                        <div class="section-title">
                            <h2 class=" text-danger text-center text-upparcase" data-aos="fade-up" data-aos-delay="300"> Recruitment Notice  </h2>
                          

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
                                            <th>Recruitment Notice</th>
                                            <th>Recruitment Publise Date</th>
                                            <th> End Date</th>
                                            <th>Recruitment PDF  </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                               
                                                    <td>1</td>
                                                    <td>Recruitment for the post of Professor.</td>
                                                    <td>01.05.2026</td>
                                                    <td>19.06.2026</td>
                                                    <td><a href="{{ asset('PDF/BGI_FinalAdv8x12PDF.pdf') }}" target="_blank"><button type="button" class="btn btn-danger "> View </button></a></td>
                                              </tr>
                                              <tr>
                                                    <td>2</td>
                                                    <td>Recruitment for the post of Associate Professor.</td>
                                                   <td>01.05.2026</td>
                                                    <td>19.06.2026</td>
                                                    <td><a href="{{ asset('PDF/BGI_FinalAdv8x12PDF.pdf') }}" target="_blank"><button type="button" class="btn btn-danger">View </button></a></td>
                                              </tr>

                                              <tr>
                                                    <td>3</td>
                                                    <td>Recruitment for the post of Assistant Professor.</td>
                                                   <td>01.05.2026</td>
                                                    <td>19.06.2026</td>
                                                    <td><a href="{{ asset('PDF/BGI_FinalAdv8x12PDF.pdf') }}" target="_blank"><button type="button" class="btn btn-danger">View </button></a></td>
                                              </tr>

                                              <tr>
                                                    <td>4</td>
                                                    <td>Recruitment for the post of Lecturers</td>
                                                   <td>01.05.2026</td>
                                                    <td>19.06.2026</td>
                                                    <td><a href="{{ asset('PDF/BGI_FinalAdv8x12PDF.pdf') }}" target="_blank"><button type="button" class="btn btn-danger">View </button></a></td>
                                              </tr>
                                               <tr>
                                                    <td>5</td>
                                                    <td>Recruitment for the post of MTS.</td>
                                                    <td>25.04.2026</td>
                                                    <td>02.05.2026</td>
                                                    <td><a href="#"><button type="button" class="btn btn-danger">View </button></a></td>
                                              </tr>
                                              <tr>
                                                    <td>5</td>
                                                    <td>Recruitment for the post of Office Assistant.</td>
                                                    <td>25.04.2026</td>
                                                    <td>02.05.2026</td>
                                                    <td><a href="#"><button type="button" class="btn btn-danger">View </button></a></td>
                                              </tr>

                                              <tr>
                                                    <td colspan="3">
                                                        
                                                    <span> <strong>Interested candidates are requested to submit their resumes for application :</strong></span> &nbsp <span class="text-danger"><strong>hroffice@bit.ac.in</strong></span>
                                                    </td>
                                                    <td colspan="2">
                                                       
                                                        
                                                    </td>
                                                    
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
                                    <h5><a target="_blank" class="text-decoration-none text-dark" href="{{ url('mou') }}">MOU with Scortek India Pvt Ltd</a></h5>
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

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>