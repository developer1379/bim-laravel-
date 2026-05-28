@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1590px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('images/sliders/ec.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/ec2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/ec3.JPG') }}" alt="slider3" title="slider3" />
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

                                    <div class="list-wrpaaer" style="height: 200px; position: relative; overflow: hidden;">
                                    <ul class="colrs">
                                            <li>
                                                <a href="{{ url('ec') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/ec/ec_mission') }}">Vision and Mission </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('head_ec') }}">Head Desk</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('faculties_ec') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('lab_ec') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/ec/ec_gallery') }}">Gallery</a>
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
            <div class="col-lg-8 bords pt-20 depart-marg lab_table">
                <div class="lab_table">
                <h1 class="text-center">Departmental Laboratories</h1>
    <div class="lab">
                <table class="lab_tab">
        <tr>
            <th> Sr. No</th>
            <th>Labs</th>
        </tr>
          <tr>
            <td>1</td>
            <td>Electronic Devices Lab</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Digital System Design Lab</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Network Analysis & Synthesis Lab</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Integrated Circuits Lab</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Digital Signal Processing Lab</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Microprocessor Lab</td>
        </tr>
        <tr>
            <td>7</td>
            <td>OPticalCommunication Lab</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Electronic Circuits Design Lab</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Communication Engineering Lab</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Analog Circuit Lab</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Signal System Lab</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Digital Communication Lab</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Control System Lab</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Microcontrollers & Embedded System Lab</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Project Lab</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Robotics & IOT Lab</td>
        </tr>
    </table>
    </div>

            </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')
