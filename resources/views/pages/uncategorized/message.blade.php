@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<section class="message">
        <div class="container">
            <div class="card shadow mt-3 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;" data-aos="fade-up" data-aos-delay="300">Message from Chairman</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('images/Chairman2.jpg') }}" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="600"/>
                                <div class="text-center pb-2">
                                    <h4 data-aos="fade-up" data-aos-delay="500">Dr. R. A. Agrawal</h4>
                                    <h5 data-aos="fade-up" data-aos-delay="600">Chairman</h5>
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
                                <h4 class="text-danger" data-aos="fade-up" data-aos-delay="300">Dr. R. A. Agrawal</h4>
                                <h5 data-aos="fade-up" data-aos-delay="400">Chairman</h5>
                                <h5 data-aos="fade-up" data-aos-delay="500">People Educational Society</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;">Message from Secretary</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('images/Secretary3.jpg') }}" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="600" />
                                <div class="text-center pb-2">
                                    <h4 data-aos="fade-up" data-aos-delay="500">Dr. Rajat Agrawal
                                    </h4>
                                    <h5 data-aos="fade-up" data-aos-delay="600">Secretary</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 sm-12 align-items-center d-flex">
                        <div class="mx-3">
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="300">There are no limits to what one can accomplish, except the limits one places on one’s own thinking. Having clear vision backed by definite plans gives us confidence to strive hard for attaining the goals. Since 2009 we have come a long way to be a group of institutions, i.e. Buddha Group of Institutions, offering regular and professional courses in engineering, science, commerce, pharmacy & para-medical.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="400">
                                We strongly believe that the future belong to the competent. Get good, get better and be the best. We foster these attributes in our students through various co-curricular, extra-curricular and sports activities to enable them to reach new heights in their professional life. Our emphasis is on pragmatic and inclusive teaching pedagogy, instilling confidence among students to pursue their innovative ideas to fruition. We encourage our faculty members to keep themselves abreast with the current development through various Faculty development Programmes, workshops, conferences etc. and enable them expand their knowledge in their respective fields and domain specific research.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="500">
                                Continual growth and progress give vibrant colors to achievements and success. The confidence shown by students and parents in Buddha Group of Institutions motivates us to give our best and chart new course by mutual learning and support.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="600">
                                Best Wishes...
                            </p>
                            <div class="text-end mx-4 mb-4">
                                <h4 class="text-danger" data-aos="fade-up" data-aos-delay="300">Dr. Rajat Agrawal</h4>
                                <h5 data-aos="fade-up" data-aos-delay="400">Secretary</h5>
                                <h5 data-aos="fade-up" data-aos-delay="500">People Educational Society</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="card shadow mt-3 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;">MESSAGE FROM DIRECTOR</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger">
                                <img src="{{ asset('images/dir_bim.jpg') }}" class="mb-4 w-100" />
                                <div class="text-center pb-2">
                                    <h4>Dr. Abhishek Kumar Tripathi
                                    </h4>
                                    <h5>Director</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 sm-12 align-items-center d-flex">
                        <div class="mx-3">
                            <p style="text-align: justify;">I take the pleasure in welcoming you to Buddha Institute of Management (BIM), an institute dedicated to the holistic growth and development of every student for a better career prospect. I welcome you, to the journey of transformation and excellence.
                            </p>
                            <p style="text-align: justify;">
                                Buddha Institute of Management is all set to bring out the potential within each and every student by providing appropriate guidance. We direct students to utilize their potential and transform them to become ‘Future-ready Managers’ who are capable of facing all kinds of challenges in the corporate world. The institute provides them with a platform to enhance their Professional Communication Skills, Critical Thinking Abilities, Ethics, Values and Entrepreneurial Abilities. All efforts are made to improve the creativity and problem-solving abilities of the students, so that they can contribute their best to the society and the country.
                            </p>
                            <p style="text-align: justify;">
                                We are confident that the students passing out from this institute will be sound in their domain knowledge, confident and have good leadership skills with capability of becoming entrepreneur.</p>

                            <div class="text-end mx-4 mb-4">
                                <h4 class="text-danger">Dr. Abhishek Kumar Tripathi</h4>
                                <h5>Director</h5>
                                <h5>Buddha Institute of Management</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!-- 
    <div class="container mt-3">
        <h1 class="text-center" style="text-transform:uppercase; color:red;">Courses</h1>
        <div class="row">
            <div class="col-md-6 sm-12"></div>
            <div class="col-md-6 sm-12"></div>
        </div>
    </div> -->
@endsection
