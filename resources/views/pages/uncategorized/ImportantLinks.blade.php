@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container my-5">

        <section class="about">
            <div class="container ">
                <div class=" col-md-12">
                    <div class="section-title">
                        <h2 class="text-danger text-center">Important Links </h2>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-md-12">

                            <div class="table-responsive bg-white">
                                <div>
                                    <table cellspacing="0" id="ContentPlaceHolder1_GridView_news" style="width:100%;border-collapse:collapse;">
                                        <tr>
                                            <td>
                                                <div class="card shadow-sm mb-2">
                                                    <div class="card-body">

                                                        <a class="text-danger text-decoration-none" id="ContentPlaceHolder1_GridView_news_HyperLink1_0" href="https://forms.gle/RdxEuGGvtMzMszVk6" target="_blank">LOA/AOA</a>
                                                        <br />

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="card shadow-sm mb-2">
                                                    <div class="card-body">

                                                        <a class="text-danger text-decoration-none" id="ContentPlaceHolder1_GridView_news_HyperLink1_1" href="https://forms.gle/RdxEuGGvtMzMszVk6" target="_blank">ADMISSION ENQUIRY FORM</a>
                                                        <br />

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
