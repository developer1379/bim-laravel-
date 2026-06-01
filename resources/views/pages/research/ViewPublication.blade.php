@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container">





        <section id="about" class="about pt-3 ">
            <div class=" container p-0 ">
                <div class="row shadow my-3">


                    <div class="col-lg-12">
                        <div class="w_content">

                            <div class="p-3 w-content">
                                <div class="section-title">
                                    <h2 class=" text-danger">Paper Presentation Research</h2>
                                </div>
                                <section class="section m-t-0   pt-0">
                                    <div class="row">
                                        <hr class=" border border-danger my-4" />
                                        <div class="col-md-12 w-txt-14">

                                            <div>
                                                <table cellspacing="0" id="ContentPlaceHolder1_ContentPlaceHolder2_GridView_news" style="width:100%;border-collapse:collapse;">
                                                    <tr>
                                                        <td>No Records</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class=" table table-bordered table-sm table-hover">
                                            <thead class=" bg-danger text-white">
                                                <tr>
                                                    <td colspan="6" class="bg-danger pt-2"nowrap="nowrap">
                                                        <h6 align="center" class="fw-bolder text-light">PAPERS PRESENTED (Session-2019-20)</h6>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class=" fw-bold">
                                                    <td>
                                                        Sr.No
                                                    </td>
                                                    <td>
                                                        Name of the Faculty/ Student
                                                    </td>
                                                    <td>
                                                        Branch
                                                    </td>
                                                    <td style="width: 143px; ">
                                                        Type of publication
                                                    </td>
                                                    <td style="width: 163px; ">
                                                        Title of publication
                                                    </td>
                                                    <td style="width: 169px; ">
                                                        Conference Place &amp; dates
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td nowrap="nowrap" style="width: 64px; ">
                                                        1
                                                    </td>
                                                    <td style="width: 180px; ">
                                                        Gaurav Jaiswal, Ashish Kumar, Rajan Singh , Neha Singh, Anil Pratap Singh
                                                    </td>
                                                    <td nowrap="nowrap" style="width: 57px; ">
                                                        CE
                                                    </td>
                                                    <td style="width: 143px; ">
                                                        International Web Conference on Smart Engineering Technologies
                                                    </td>
                                                    <td style="width: 163px; ">
                                                        Use of Municipal Solid Waste Incinerator as Bottom Ash in concrete,Paper Id IWCSET20-CIVIL-009
                                                    </td>
                                                    <td style="width: 169px; ">
                                                        Ramco Institute of Technology, Rajapalayam – 626117,Virudhunagar District, Tamil nadu, India
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
