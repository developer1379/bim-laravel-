@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<div class="container my-5">
        <div class="px-4">
            <h2 class="text-center mb-5" data-aos="fade-up" data-aos-delay="300">Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.159151946065!2d83.26886607547598!3d26.73929687675087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399147380139859b%3A0x708768ccb2c065c9!2sBuddha%20Institute%20of%20Technology%20%2C%20Gorakhpur!5e0!3m2!1sen!2sin!4v1730037668786!5m2!1sen!2sin"
                        height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-up" data-aos-delay="400"></iframe>
                    <h5 data-aos="fade-up" data-aos-delay="450">Address</h5>
                    <a data-aos="fade-up" data-aos-delay="500" href="https://maps.app.goo.gl/ripuPoW75b1aJjbcA" target="blank"
                        class='text-decoration-none d-inline-block text-dark mb-2'>
                        <i class="bi bi-geo-alt-fill"></i> Buddha Institute of Management
                        CL-1, Sector 7, Gida, Gorakhpur, Uttar Pradesh 273209</a>
                    <h5 class='mt-4' data-aos="fade-up" data-aos-delay="550">Call Us</h5>
                    <a data-aos="fade-up" data-aos-delay="600" href="{{ url('tel: +916387092485') }}" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91 95545599001</a>
                    <br><a data-aos="fade-up" data-aos-delay="600" href="{{ url('tel: +918506820025') }}" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91 9839621881</a>
                    <h5 class='mt-4' data-aos="fade-up" data-aos-delay="650">Email</h5>
                    <a data-aos="fade-up" data-aos-delay="700" href="mailto:director@bimgkp.ac.in" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-envelope-fill"></i> director@bimgkp.ac.in</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form action="" method="post">
                        <h5 data-aos="fade-up" data-aos-delay="300">Send a mesage</h5>
                        <div class="mt-3">
                            <label for="form-label" style='font-weight:bold;' data-aos="fade-up" data-aos-delay="400">Name</label>
                            <input type="text" required name="name" class="form-control shadow-none" data-aos="fade-up" data-aos-delay="450">
                        </div>
                        <div class="mt-3">
                            <label for="form-label" style='font-weight:bold;' data-aos="fade-up" data-aos-delay="500">Email</label>
                            <input type="email" required name="email" class="form-control shadow-none" data-aos="fade-up" data-aos-delay="550">
                        </div>

                        <div class="mt-3">
                            <label for="form-label" style='font-weight:bold;' data-aos="fade-up" data-aos-delay="600">Message</label>
                            <textarea rows='5' required name="message" style='resize:none' class="form-control shadow-none"  data-aos="fade-up" data-aos-delay="650"></textarea>
                        </div>
                        <div class="col-lg-12 text-center mt-4" data-aos="fade-up" data-aos-delay="700">
                            <input type="submit" name="send_message" class="btn btn-md btn-outline-dark rounded-0 fw-bold shadow-none" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
