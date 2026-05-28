 @include('pages.placements.top')

<section>
    <div class="container cse-container" style="max-width: 95%;">
        <div class="row">
            <div class="col-lg-4 depart-padd">
                <div class="mb-30">
                    <nav>
                        <div class="nav nav-tabs text-uppercase  d-flex bd-highlight" id="nav-tab" role="tablist">
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Gallery</button>
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
                                                <a href="{{ url('gallery') }}">Infrastructure</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('convocation') }}">Convocation</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('techyuva_gallery') }}">Tech Yuva</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dm_gallery') }}">Gorakhpur Mahotsav</a>
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
                   
                    <div class="gallery">
    <div class="container-fluid">
        <h3 class="gal-head">Gorakhpur Mahotsav</h3>
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/15.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/12.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/11.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/10.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/9.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/8.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/7.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/5.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/1.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="gallery-img">
                    <img src="{{ asset('images/gallery/dm/3.JPG') }}" class="img-thumbnail" onclick="onClick(this)">
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
