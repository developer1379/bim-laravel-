@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                   <li><img src="{{ asset('../../../images/sliders/me.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/me1.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/me2.jpg') }}" alt="slider3" title="slider3" />
                    </li>
                     <li><img src="{{ asset('../../../images/sliders/me3.jpg') }}" alt="slider3" title="slider3" />
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
                                                <a href="{{ url('../../../me') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('head_me') }}".php>Head Desk</a>
                                            </li>
                                          <li>
                                                <a href="{{ url('../../../faculties_me') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../lab_me') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/me/me_gallery') }}">Gallery</a>
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
                    <img src="{{ asset('../../../images/gallery/me/1.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/2.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/3.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
           
             <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/5.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/6.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/7.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/8.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div> 
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/9.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
             <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/10.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
             <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/11.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
             <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/12.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
             <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/13.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/14.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>

            
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/15.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>

            </div>
             <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('../../../images/gallery/me/16.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
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
