@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('../../../images/sliders/ec.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/ec2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/ec3.JPG') }}" alt="slider3" title="slider3" />
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

                                    <div class="list-wrpaaer" style="height: 247px; position: relative; overflow: hidden;">
                                    <ul class="colrs">
                                            <li>
                                                <a href="{{ url('../../../ec') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/ec/ec_mission') }}">Vision and Mission </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../head_ec') }}">Head Desk</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../faculties_ec') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../lab_ec') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/ec/ec_gallery') }}">Gallery</a>
                                            </li>
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
                    <h4 class="college-head">Department of Electronics & Communication Engineering</h4>
                    <hr>
                    <div class="gallery">
                        <div class="container-fluid">
                            <h3 class="gal-head">Gallery</h3>
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/1.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/2.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/3.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/4.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/5.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/6.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/7.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/8.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/9.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/10.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/11.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/12.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/13.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/14.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>


                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/15.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/16.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/17.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/18.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/20.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/21.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/22.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/23.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/24.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/25.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-img">
                                        <img src="{{ asset('../../../images/gallery/ec/26.jpeg') }}" class="img-thumbnail" onclick="onClick(this)">
                                    </div>
                                </div>





                                <div id="modal01" class="detail" onclick="this.style.display='none'">
                                    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                    <div class="w3-modal-content w3-animate-zoom">
                                        <img id="img01" style="width:100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
