@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1390px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('images/sliders/2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/222.jpeg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/3.jpeg') }}" alt="slider2" title="slider2" />
                    </li>
                    
                    <li><img src="{{ asset('images/sliders/5.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/4.jpg') }}" alt="slider2" title="slider2" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'research')" id="defaultOpen">Research</button>
                        </div>
                    </nav>

                    <div id="research" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">

                                    <div class="list-wrpaaer" style="height: 300px; position: relative; overflow: hidden;">
                                        <ul class="colrs">
                                            <li>
                                                <a href="{{ url('cse') }}">Research</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Incubation Cell</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Patent</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Paper Presentation</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Paper Publication</a>
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
                    <h4 class="college-head">Research Cell</h4>
                    <hr>
                    <div class="er-txt">
                        <p style="text-align: justify;">The need for technical education is growing rapidly in the world due to the changing economic and industrial scenario which is increasingly becoming more high-tech, requiring a higher level of education from employees and workers. BIT always believes that R&D is an integral part of engineering education, failing which the engineering education scenario will keep getting further outdated and poorer. Hence to improve the quality of education it is equally important to improve the R&D culture. Keeping this in mind, BIT has an established Research and Development cell which works in research and development of products with better technology and more users friendly. Students of BIT at this young age are actively involved in Research and Development and are sent abroad in foreign companies which give them an edge over other students.</p></div>
                </div>
                <div class="padd-research">
                <table class="research">
        <tr>
            <th> Department</th>
            <th>Faculty Coordinators</th>
            <th>Students Coordinators</th>
        </tr>
        <tr>
            <td>EC</td>
            <td>
                <p>Mr. Ghanshyam Mishra</p>
                <p class="researchp"> Narendra Yadava</p>
            </td>
            <td>
                <p>Abhinandan Singh – 2nd Yr</p>
                <p class="researchp">Arpita Tripathi – 2nd Yr</p>
                <p class="researchp">Prabha Srivastava – 3rd Yr</p>
                <p class="researchp">Surya Prakash yadav – 3rd Yr</p>
                <p class="researchp">Amrit Pandey – 4th Yr</p>
                <p class="researchp">Shiva Dwivedi – 4th Yr</p>
            </td>
        </tr>
        <tr>
            <td>CE</td>
            <td>
                <p>
                    Mr. Ankur Kumar</p>
                <p class="researchp">Ms. Riddhi Dubey</p>
            </td>
            <td>
                <p>Tejendra Singh – 2nd Yr</p>
                <p class="researchp">Abdul Hameed – 2nd Yr</p>
                <p class="researchp">Mohd. Arif – 4th Yr</p>
                <p class="researchp">Priyanshu Gupta – 3rd Yr</p>
                <p class="researchp">Amul Ranjan – 4th Yr</p>
            </td>
        </tr>
        <tr>
            <td>CS/IT</td>
            <td>
                <p> Mr. Abhinandan Tripathi</p>
                <p class="researchp">Mr. Rajeev Ranjan K. Tripathi</p>
            </td>
            <td>
                <p>Arpita Singh – IT 2nd Yr</p>
                <p class="researchp">Piyush Srivastav – CSE 2nd Yr</p>
                <p class="researchp">Nishtha Verma – IT 3rd Yr</p>
                <p class="researchp">Shristee Agarwal – CSE 3rd Yr</p>
                <p class="researchp">Gauri gupta – IT 4th Yr</p> 
                <p class="researchp"> Krishna Mohan Pandey – CSE 4th yr </p>
            </td>
        </tr>

        <tr>
            <td>ME</td>
            <td>
                <p>Mr. Dhirendra Kumar</p>
                <p class="researchp">Mr. Ved Prakash Pandey</p>
            </td>
            <td>
                <p>Sakshi Pandey – 2nd Yr</p>
                <p class="researchp">  Abhay Srivastava – 2nd Yr </p>
                <p class="researchp">Iqbal Ansari – 3rd Yr</p>
                <p class="researchp">Rishabh Tiwari – 3rd Yr</p>
                <p class="researchp">Raju Singh – 4th yr</p>
                <p class="researchp">Priyanshi Singh – 4th yr</p> 
                <p class="researchp">  Priyanshi Singh – 4th yr</p>
            </td>
        </tr>

    </table>
    
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
