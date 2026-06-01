@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container">


        <section id="about" class="about bg-white ">
            <div class="container shadow  px-2 border border-1 p-3">
                <div class="row">
                    <div class="col-md-4 px-md-0 pb-50">
                        <h6 class="w-bgph fs-6 p-1 "><i class=" bx bxl-graphql me-2 "></i>The Department has following labs: </h6>
                        <div class="collapse show  pt-2 pl-0 ">
                            <ul class="list-group ">
                                <li class="list-group-item text-danger border border-1"> Logic Design Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Data Structure Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> OOPs Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Microprocessor Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> DBMS lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Computer Organization Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Software Engineering Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Operating System Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Algorithm Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Discrete Structure & Logic Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Object Oriented Technique Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Computer Graphics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Computer Network Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Web technology Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Compiler Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Software Project Management Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Distributed System Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Digital Image Processing Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Project Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Cryptography & Network Security Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Artificial Intelligence Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Python Lab
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title">
                            <h2 class="text-center text-danger">LABORATRIES</h2>
                        </div>
                        <div class="int-container">

                            <div class="gallery">
                                <div class="container-fluid w-tj">
                                    <p></p>
                                    <h5><a class="text-uppercase text-danger text-decoration-none" href="#" target="_blank">COMPUTER LAB COMPLEX</a></h5>

                                    <p>
                                        The High-Tech Labs consists of Client/Server Architecture & high speed Multi services Enabled Having Projector in all Labs & Network with leased-line Internet connectivity. Centralized Server is well equipped with high speed IBM Intel Server (Window 2008 Standard Server, Red Hat Linux). The lab consists of 550 Desktops with Higher configuration (Intel Core i3 processor 7th Gen, 4GB RAM, 1TB HDD). Having System Software such as Windows-7, Windows-10 & Linux, and Several Applications Software such as Oracle, MS-SQL, Microsoft Visual Studio.Net, Office Suites (Microsoft Office 2010), C, C++, Java, XML, CAD Tools (Auto CAD 2012), MATLAB, QHAC Antivirus software are installed on all desktops. Complete Power backup is provided with more than 90 KVA Online UPS.<br />
                                        <br />
                                    </p>
                                    <p>
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-CSE1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CSE Lab 1" />
                                <img src="{{ asset('images/Lab-CSE2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CSE Lab 2" />
                            </div>

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-CSE3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CSE Lab 3" />
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
