@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('images/sliders/cse/lab4.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/cse/lab2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/cse/lab5.jpg') }}" alt="slider3" title="slider3" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Computer Science & Engineering</button>
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
                                                <a href="{{ url('cse') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/cse/cse_mission') }}">Vision and Mission </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('head_cse') }}">Head Desk</a>
                                            </li>
                                             <li>
                                                <a href="{{ url('faculties_cse') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('lab_cse') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/cse/cs_gallery') }}">Gallery</a>
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
                <div class="lab_table ">
                <h1 >Departmental Laboratories</h1>
                <div class="lab">
     <table class="lab_tab">
        <tr>
            <th> Sr. No</th>
            <th>Labs</th>
        </tr>
          <tr>
            <td>1</td>
            <td>Phython Lab</td>
        </tr>
        <tr>
            <td>2</td>
            <td>C/C++ Lab</td>
        </tr>
        <tr>
            <td>3</td>
            <td>DBMS Lab</td>
        </tr>
        <tr>
            <td>4</td>
            <td>IOT Lab</td>
        </tr>
        <tr>
            <td>5</td>
            <td>PG & Research Lab</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Artificial Intelligence Lab</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Java Lab</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Compiler Design</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Software Engineering</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Cryptography & Network Security Lab</td>
        </tr>
    </table>
    </div>
</div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
