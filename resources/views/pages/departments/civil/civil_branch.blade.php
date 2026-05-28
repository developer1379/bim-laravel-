@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="-wrapper" id="-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="" id="-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="-slides" style="display:none;">
                    <li><img src="{{ asset('../../../images/sliders/2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/222.jpeg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/3.jpeg') }}" alt="slider2" title="slider2" />
                    </li>
                    
                    <li><img src="{{ asset('../../../images/sliders/5.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/4.jpg') }}" alt="slider2" title="slider2" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">BRANCH</button>
                        </div>
                    </nav>

                    <div id="cse" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">

                                    <div class="list-wrpaaer" style="height: 200px; position: relative; overflow: hidden;">
                                        <ul class="colrs">
                                            <li>
                                                <a href="{{ url('cse_branch') }}">Computer Science & Engineering</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/it/it_branch') }}">Information Technology</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/civil/civil_branch') }}">Civil Engineering</a>
                                            </li>
                                              <li>
                                                <a href="{{ url('departments/ec/ec_branch') }}">Electronics Communication & Engineering</a>
                                            </li>
                                          <li>
                                                <a href="{{ url('departments/me/me_branch') }}">Mechanical Engineering</a>
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
                    <h4 class="college-head">Civil Engineering</h4>
                    <hr>
                    <div class="er-txt">
                      
                        <p style="text-align: justify;">Civil Engineering is considred to be the most versatile branch among all the engineering branches. It is the branch with a lot of diversity from geotechnical sceinces to structural engineering, environmental to hydraulics, transportation to hydrology. civil engineering can be consider as a single largest branch among all the engineering branches. The vision of the department is to give an exposure to budding civil technocraft to various challenges in the profession. 
                         <p style="text-align: justify;">The departement of civil engineering is producing high qulity technical manpower deep understanding of fundamnetal principles, development of creative ability to handle the challenges of Civil engineering, and the analytical ability to solve problem which are interdiscipinary in nature. The Department also encourage its students to participate in extracurricular and co-curricular activities, essential for development, nurturing of team spirit, and developing organizational skills. The faculty members of the department are involved in high qulity research and consultency activities.     </p>
                         <h5>Eligibility Criteria for Civil Engineering / B.Tech </h5>
                        <p style="text-align: justify;">The basic eligibility criteria for BTech Civil Engineering is class 12 with Physics, Chemistry and Mathematics. However, there are additional criteria in every entrance exam and institute. Some of the institutes also conduct admission to their courses on merit basis i.e. based on marks scored by candidates in their class 12 board exams.</p>
                        <h5>Sets Available </h5>
                         <p style="text-align: justify;"> Civil Engineering (120 Seats)</p>
                         <p style="text-align: justify;">Civil Engineering -Lateral (12 Seats)</p>
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
