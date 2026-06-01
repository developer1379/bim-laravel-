@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<section class="message">
        <div class="container">
            <div class="card shadow mt-5 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;" data-aos="fade-up" data-aos-delay="300">Message from CTO</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('Images/CTO.jpg') }}" title="CTO Image" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="600"/>
                                <div class="text-center pb-2">
                                    <h4 data-aos="fade-up" data-aos-delay="500">Name</h4>
                                    <h5 data-aos="fade-up" data-aos-delay="600">CTO</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 sm-12 align-items-center d-flex">
                        <div class="mx-3">
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="300">Education is not just about going to school and getting a degree. Its about widening your
                                knowledge and absorbing the truth about life. – Shakuntla Devi.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="400">
                                Treading on this philosophy Buddha Group of Institutions (BGI)has been nurturing and
                                rearing talents to the service of society and nation for more than a decade. Holistic
                                development of students is at the core of our mission for the past decade and it has
                                been testimony to our academic excellence as reflected by the various awards and
                                accolades won by our students in various co-curricular, extra –curricular and sports
                                activities at various regional and national level events at premier institutions.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="500">
                                People Educational Society started its mission in 2009 with Buddha Institute of
                                Technology and this decade long experience in imparting technical education successfully
                                has given us much confidence to start new courses and we have now 6 Institutes under our
                                umbrella i.e. Budhha Group of Institutions offering undergraduate / Postgraduate &
                                diploma courses in Engineering, pharmacy, management , science, commerce & para-medical
                                courses . Further, new courses are on anvil.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="600">
                                I extend my best wishes to all the authorities teachers, staff and students of BGI for
                                their better future.
                            </p>
                            <div class="text-end mx-4 mb-4">
                                <h4 class="text-danger" data-aos="fade-up" data-aos-delay="300">Name</h4>
                                <h5 data-aos="fade-up" data-aos-delay="400">CTO</h5>
                                <!-- <h5 data-aos="fade-up" data-aos-delay="500">People Educational Society</h5> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
