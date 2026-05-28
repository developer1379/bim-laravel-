@include('pages.placements.top')


<section>
    <div class="container cse-container" style="max-width: 95%;">
        <div class="row">
            <div class="col-lg-4 depart-padd">
                <div class="mb-30">
                    <nav>
                        <div class="nav nav-tabs text-uppercase  d-flex bd-highlight" id="nav-tab" role="tablist">
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Facilities</button>
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
                                                <a href="{{ url('campus-life/hostel') }}">Hostel</a>
                                            </li>
                                          <li>
                                                <a href="{{ url('canteen') }}">Canteen</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('trans') }}">Transport</a>
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
                    <h4 class="college-head">Buddha Bazaar</h4>
                    <hr>
                    <div class="er-txt">
                        <p style="text-align: justify;">Institute takes care of all the small things that are needed by the students during the course of attending classes / labs in the campus. In view of this Daily Needs shop i.e. Buddha Bazaar has been opened for all the students where students can get required stationery (pen, pencil, white papers etc). The shop has the facility of photocopying also. </p>
                    </div>
                    <div class="row">
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/bb1.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/bb2.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/bb3.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
        </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
