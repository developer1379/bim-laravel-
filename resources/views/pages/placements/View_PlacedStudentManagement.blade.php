<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BGI STAGE: - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar')

    <!-- About Us Section Start -->
    <div class="container">


        <section id="testimonials1" class="testimonials my-5 ">
            <div class="container">
                <div class="section-title text-center mb-3">
                    <h2>Placement Statistics</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 w-txt-14">

                        <div>
                            <table cellspacing="0" id="ContentPlaceHolder2_GridView_news" style="width:100%;border-collapse:collapse;">
                                <tr>
                                    <td>
                                        <div class="card shadow-sm mb-3">
                                            <div class="card-body">

                                                &nbsp;
                                                <a class="text-danger text-uppercase text-decoration-none" id="ContentPlaceHolder2_GridView_news_HyperLink1_0" title="Click here" href="{{ url('placement19-20') }}" target="_blank">PLACEMENT DETAILS 2019-20</a>
                                                <br />
                                                <span class="float-end" style="font-size: 12px"><i class="bx bx-calendar me-2"></i>02-05-2024</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="card shadow-sm mb-3">
                                            <div class="card-body">

                                                &nbsp;
                                                <a class="text-danger text-uppercase text-decoration-none" id="ContentPlaceHolder2_GridView_news_HyperLink1_1" title="Click here" href="{{ url('placement20-21') }}" target="_blank">PLACEMENT DETAILS 2020-21</a>
                                                <br />
                                                <span class="float-end" style="font-size: 12px"><i class="bx bx-calendar me-2"></i>02-05-2024</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="card shadow-sm mb-3">
                                            <div class="card-body">

                                                &nbsp;
                                                <a class="text-danger text-uppercase text-decoration-none" id="ContentPlaceHolder2_GridView_news_HyperLink1_2" title="Click here" href="{{ url('placement21-22') }}" target="_blank">PLACEMENT DETAILS 2021-22</a>
                                                <br />
                                                <span class="float-end" style="font-size: 12px"><i class="bx bx-calendar me-2"></i>02-05-2024</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="card shadow-sm mb-3">
                                            <div class="card-body">

                                                &nbsp;
                                                <a class="text-danger text-uppercase text-decoration-none" id="ContentPlaceHolder2_GridView_news_HyperLink1_3" title="Click here" href="{{ url('placement22-23') }}" target="_blank">PLACEMENT DETAILS 2022-23</a>
                                                <br />
                                                <span class="float-end" style="font-size: 12px"><i class="bx bx-calendar me-2"></i>02-05-2024</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </div>
    <!-- About Us Section Ends -->

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>