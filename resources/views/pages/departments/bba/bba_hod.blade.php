@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_bba',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!--about department-->


    <section class="message">
        <div class="container">
            <div class="card shadow mt-5 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;"  data-aos="fade-up" data-aos-delay="300">About Department</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('../../../images/dep_bba_logo.png') }}" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="500" />
                                <div class="text-center pb-3">
                                    
                                   <!-- <h5 data-aos="fade-up" data-aos-delay="500">Director</h5>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 sm-12 align-items-center d-flex">
                        <div class="mx-3">
                            <p style="text-align: justify;"  data-aos="fade-up" data-aos-delay="300">
                                The Department of Business Administration plays a central role in delivering the Bachelor of Business Administration (BBA) program. It is designed to equip students with foundational and advanced knowledge in business management, leadership, and entrepreneurship, preparing them for diverse careers in the corporate world as well as for higher studies. The program offers a well-structured curriculum that includes core subjects such as principles of management, marketing, finance, human resource management, business communication, entrepreneurship, and business analytics. Through these courses, students gain insights into how organizations operate and how effective decisions are made in dynamic business environments.
A key strength of the department is its emphasis on experiential learning. This includes case studies, group discussions, industry projects, internships, workshops, and seminars conducted by industry experts. Such activities help bridge the gap between classroom learning and real-world business challenges. Students are encouraged to develop critical thinking, problem-solving abilities, and leadership qualities. The faculty in the Department of Business Administration usually consists of experienced academicians who bring a blend of research knowledge and practical exposure. They mentor students not only academically but also guide them in career planning and personal development. In addition, the department often organizes co-curricular and extracurricular activities such as business quizzes, management fests, presentations, and entrepreneurship development programs. These activities enhance students’ confidence, communication skills, and teamwork.

                            </p>


                           <!-- <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="400">
                                Buddha Institute of Management is all set to bring out the potential within each and every student by providing appropriate guidance. We direct students to utilize their potential and transform them to become ‘Future-ready Managers’ who are capable of facing all kinds of challenges in the corporate world. The institute provides them with a platform to enhance their Professional Communication Skills, Critical Thinking Abilities, Ethics, Values and Entrepreneurial Abilities. All efforts are made to improve the creativity and problem-solving abilities of the students, so that they can contribute their best to the society and the country.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="500">
                                We are confident that the students passing out from this institute will be sound in their domain knowledge, confident and have good leadership skills with capability of becoming entrepreneur.</p>-->

                            <div class="text-end mx-4 mb-4">
                                <!--<h4 class="text-danger"  data-aos="fade-up" data-aos-delay="300">Dr. Abhishek Kumar Tripathi</h4>
                                <h5  data-aos="fade-up" data-aos-delay="400">Director</h5>
                                <h5  data-aos="fade-up" data-aos-delay="500">Buddha Institute of Management</h5>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- end-->


    <section class="message">
        <div class="container">
            <div class="card shadow mt-5 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;"  data-aos="fade-up" data-aos-delay="300">MESSAGE FROM HOD</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('../../../images/rrp.png') }}" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="500" />
                                <div class="text-center pb-3">
                                    
                                    <h5 data-aos="fade-up" data-aos-delay="500">HOD</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 sm-12 align-items-center d-flex">
                        <div class="mx-3">
                            <p style="text-align: justify;"  data-aos="fade-up" data-aos-delay="300">I take the pleasure in welcoming you to Buddha Institute of Management (BIM), an institute dedicated to the holistic growth and development of every student for a better career prospect. I welcome you, to the journey of transformation and excellence.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="400">
                                Buddha Institute of Management is all set to bring out the potential within each and every student by providing appropriate guidance. We direct students to utilize their potential and transform them to become ‘Future-ready Managers’ who are capable of facing all kinds of challenges in the corporate world. The institute provides them with a platform to enhance their Professional Communication Skills, Critical Thinking Abilities, Ethics, Values and Entrepreneurial Abilities. All efforts are made to improve the creativity and problem-solving abilities of the students, so that they can contribute their best to the society and the country.
                            </p>
                            <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="500">
                                We are confident that the students passing out from this institute will be sound in their domain knowledge, confident and have good leadership skills with capability of becoming entrepreneur.</p>

                            <div class="text-end mx-4 mb-4">
                                <h4 class="text-danger"  data-aos="fade-up" data-aos-delay="300">Dr. Rama Raman Pandey </h4>
                                <h5  data-aos="fade-up" data-aos-delay="400">HOD</h5>
                                <h5  data-aos="fade-up" data-aos-delay="500">BBA, Buddha Institute of Management</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
