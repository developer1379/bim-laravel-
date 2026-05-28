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
                    <h4 class="college-head">Hostel</h4>
                    <hr>
                    <div class="er-txt">
                        <p style="text-align: justify;">Living in student accommodation can be an exciting and rewarding experience. Stay at our hostel during the academic period helps the students to forge meaningful friendships and helps to learn how to live independently in a community based environment. There are also opportunities for personal growth and development as the students start adjusting to a new way of living and experience cultural diversity. The Institute provides separate hostels for boys and girls. Hostels are provided with mess, communication and recreation facilities. The girls’ hostel is located in the campus itself. Hostel has a well equipped Gym with modern exercising gadgets to provide for the betterment of physical fitness of the students.</p>
                    </div>
                    <div class="row">
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/0.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/1.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/2.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/3.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/4.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/5.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/6.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/7.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/8.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/10.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/hostel/9.jpg') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
        </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
