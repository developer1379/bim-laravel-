<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIM - Contact Us</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar1')
    <div class="container my-5">
        <div class="px-4">
            <h2 class="text-center mb-5">Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d135631.34001204107!2d83.12500847084264!3d26.708545605286517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39914700354ed031%3A0x672b2611f1af346b!2sBuddha%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1731493703511!5m2!1sen!2sin"
                        height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/ripuPoW75b1aJjbcA" target="blank"
                        class='text-decoration-none d-inline-block text-dark mb-2'>
                        <i class="bi bi-geo-alt-fill"></i> Buddha Institute of Management
                        CL-1, Sector 7, Gida, Gorakhpur, Uttar Pradesh 273209</a>
                    <h5 class='mt-4'>Call Us</h5>
                    <a href="{{ url('tel: +916387092485') }}" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91 9554559900</a>
                    <br><a href="{{ url('tel: +918506820025') }}" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91 9839621881</a>
                    <h5 class='mt-4'>Email</h5>
                    <a href="mailto:director@bimgkp.ac.in" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-envelope-fill"></i> bim.gida@gmail.com/director@bimgkp.ac.in</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form action="" method="post">
                        <h5>Send a mesage</h5>
                        <div class="mt-3">
                            <label for="form-label" style='font-weight:bold;'>Name</label>
                            <input type="text" required name="name" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="form-label" style='font-weight:bold;'>Email</label>
                            <input type="email" required name="email" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label for="form-label" style='font-weight:bold;'>Message</label>
                            <textarea rows='5' required name="message" style='resize:none' class="form-control shadow-none"></textarea>
                        </div>
                        <div class="col-lg-12 text-center mt-4">
                            <input type="submit" name="send_message" class="btn btn-md btn-outline-dark rounded-0 fw-bold shadow-none" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>