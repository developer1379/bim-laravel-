@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('../../../images/sliders/civil.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/civil2.jpeg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/civil3.JPG') }}" alt="slider3" title="slider3" />
                    </li>
                     <li><img src="{{ asset('../../../images/sliders/civil4.JPG') }}" alt="slider3" title="slider3" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container cse-container" style="max-width: 95%;">
        <div class="row">
            <div class="col-lg-4 depart-padd">
                <div class="mb-30">
                    <nav>
                        <div class="nav nav-tabs text-uppercase  d-flex bd-highlight" id="nav-tab" role="tablist">
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'civil')" id="defaultOpen">Civil Engineering</button>
                        </div>
                    </nav>

                    <div id="civil" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">

                                    <div class="list-wrpaaer" style="height: 200px; position: relative; overflow: hidden;">
                                        <ul class="colrs">
                                            <li>
                                                <a href="{{ url('civil') }}">About</a>
                                            </li>
                                            <li>
                                            <a href="{{ url('head_civil') }}">Head Desk</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('faculties_civil') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('lab_civil') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/civil/civil_gallery') }}">Gallery</a>
                                            </li>
                  <li>
                                                <a href="{{ url('coming') }}" >Time Table</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('coming') }}">Achievements</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('coming') }}">Research & Consultancy</a>
                                            </li>
                                                                                        <li>
                                                <a href="{{ url('coming') }}">Curriculum</a>
                                            </li>
                                   

                                            <li>
                                                <a href="{{ url('coming') }}">Publications</a>
                                            </li>
                                            
                                   
                                            <li>
                                                <a href="{{ url('coming') }}">Organization Structure</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Notices</a>
                                            </li>
                                   
                                        </ul>
                                    </div>
                                    <!-- list-wrpaaer -->

                                </div>
                            </div>
                        

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 bords pt-20 depart-marg">
                <div class="int-container">
                    <h4 class="college-head">Department OF Civil Engineering</h4>
                    <hr>
                    <div class="er-txt">
                        <h5>AIM OF THE COURSE </h5>
                        <p style="text-align: justify;">Civil Engineering started from the dawn of civilization. Civil Engineering is synonymous to creation and construction. The domain of Civil Engineering is very wide and it has embraced almost all fields of human civilization and development.  Graduates should solve civil engineering problems within a greater societal context by doing the following:</p>
                        <ol>
                            <li>Act professionally and ethically.</li>
                            <li>Apply knowledge, strong reasoning, and quantitative skills to design and implement creative and sustainable solutions.</li>
                            <li>Engage in life-long learning to meet the challenges facing the profession.</li>
                            <li>Exhibit strong communication, interpersonal, and resource-management skills as leaders in the civil engineering profession.</li>
                        </ol>
                        <h5>
                            JOB OPPORTUNITIES
                        </h5>
                        <p style="text-align: justify;">Every day, from the water faucet to the highway, you see the work of civil and environmental engineers in action. Civil engineering is one of the broadest of the engineering disciplines, extending across many technical specialties. Civil engineers plan, design, and supervise the construction of facilities essential to modern life. These facilities vary widely in nature, size, and scope and include space satellites and launching facilities, offshore structures, bridges, buildings, tunnels, highways, transit systems, dams, airports, harbors, water supply and wastewater treatment plants. Civil engineers work in diversified areas such as structural engineering, geotechnical engineering, water resources and environmental engineering, transportation engineering, ocean and coastal engineering, and construction engineering..</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
