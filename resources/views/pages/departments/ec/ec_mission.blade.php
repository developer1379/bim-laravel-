@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('../../../images/sliders/cse/lab5.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/cse/lab2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/cse/lab4.jpg') }}" alt="slider3" title="slider3" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Electronics & Communication Engineering</button>
                        </div>
                    </nav>

                    <div id="cse" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">

                                    <div class="list-wrpaaer" style="height: 247px; position: relative; overflow: hidden;">
                                    <ul class="colrs">
                                                     <li>
                                                <a href="{{ url('../../../coming') }}" >Time Table</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('../../../coming') }}">Achievements</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('../../../coming') }}">Research & Consultancy</a>
                                            </li>
                                                                                        <li>
                                                <a href="{{ url('../../../coming') }}">Curriculum</a>
                                            </li>
                                   

                                            <li>
                                                <a href="{{ url('../../../coming') }}">Publications</a>
                                            </li>
                                            
                                   
                                            <li>
                                                <a href="{{ url('../../../coming') }}">Organization Structure</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../coming') }}">Notices</a>
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
                    <div class="er-txt">
                        <h4 style="font-weight: bold;">Vision</h5>
                            <hr>
                            <p style="text-align: justify;">To provide value based quality education in the field of Electronics and Communication Engineering conforming to the updated curriculum, effective teaching learning process and updated laboratory facilities in collaboration with the industries.</p>

                            <h4 style="font-weight: bold;">
                                Mission
                            </h4>
                            <hr>
                            <p style="text-align: justify;"><b>[M1]:</b> : To implement an updated curriculum in the field of Electronics and Communication Engineering.
                            </p>
                            <p style="text-align: justify;"><b>[M2]:</b>
                            To develop a culture of innovative research through interaction with industry.</p>
                            <p style="text-align: justify;"><b>[M3]:</b>
                            To develop value based professional ethics and entrepreneur skills in students.</p>


                        
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
