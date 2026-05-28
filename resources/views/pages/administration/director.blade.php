<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIM - Message From Director</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar1')
    <section class="message">
        <div class="container">
            <div class="card shadow mt-5 mb-5">
                <div class="row">
                    <h2 class="text-center text-danger mt-3" style="text-transform:uppercase;"  data-aos="fade-up" data-aos-delay="300">MESSAGE FROM DIRECTOR</h2>
                    <div class=" col-md-3 sm-12 my-4">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('images/dir_bim1.jpg') }}" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="500" />
                                <div class="text-center pb-3">
                                    
                                    <h5 data-aos="fade-up" data-aos-delay="500">Director</h5>
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
                                <h4 class="text-danger"  data-aos="fade-up" data-aos-delay="300">Dr. Abhishek Kumar Tripathi</h4>
                                <h5  data-aos="fade-up" data-aos-delay="400">Director</h5>
                                <h5  data-aos="fade-up" data-aos-delay="500">Buddha Institute of Management</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('includes.footer')
    
    @include('includes.body_links')
    
</body>

</html>