@include('pages.placements.top')


<section>
    <div class="container cse-container" style="max-width: 95%;">
        <div class="row">
            <div class="col-lg-4 depart-padd">
                <div class="mb-30">
                    <nav>
                        <div class="nav nav-tabs text-uppercase  d-flex bd-highlight" id="nav-tab" role="tablist">
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Traning & Placement</button>
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
                                                <a href="{{ url('tpc_head') }}">Traning & Placement Head</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Company Registered</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('placement') }}">Placements</a>
                                            </li>
                            
                                        </ul>
                                    </div>
                                    <!-- list-wrpaaer -->
                                    <div class=" clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-8 bords pt-20 depart-marg">
      
    <div class="container" style="max-width: 90%;">
        <div class="col-lg-12">
            <h2 class="awds-head">Placements</h2>
            <div class="marg-top padd-rg text-center">
                <div class="row ">

                    <div class="plac col-lg-5 col-12 marg-rg">

                        <div class="place-img">
                            <img src="{{ asset('images/placements/1.jpeg') }}" alt="">
                        </div>

                        <div class="title">
                            <h4>Shubhanshi</h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                           Package (3.5 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac col-lg-5 marg-rg col-12">

                        <div class="place-img">
                            <img src="{{ asset('images/placements/2.jpeg') }}" alt="">
                        </div>

                        <div class="title">
                            <h4>Shailesh Gond </h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                           Package (3.5 lac)
                        </div>

                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac marg-rg col-lg-5 col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/3.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Rajesh Kumar </h4>
                        </div>

                        <div class="title">
                            KiviTech (2022)
                        </div>
                        <div class="title">
                           Package (2.8 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac col-lg-5 marg-rg col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/4.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Shreya Srivastava</h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                           Package (3.5 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac marg-rg col-lg-5 col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/5.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Utkarsh Pandey </h4>
                        </div>

                        <div class="title">
                            Cedcoss (2022)
                        </div>
                        <div class="title">
                            Package (4 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac col-lg-5 col-12 marg-rg">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/6.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Shrishtee Agrawal</h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                            Package (3.5 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div> <div class="plac marg-rg col-lg-5 col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/7.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Payal Singh </h4>
                        </div>

                        <div class="title">
                            TCS (2022)
                        </div>
                        <div class="title">
                           Package (3.6 lac) 
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac marg-rg col-lg-5 col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/9.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4> Anurag Tiwari</h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                           Package (3.5 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                     <div class="plac col-lg-5 col-12 marg-rg">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/8.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Saumya Jaiswal </h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                            Package (3.6 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    <div class="plac col-lg-5 marg-rg col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/12.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Vaishnavi Mishra </h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                            Package (3.6 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>
                    

                    <div class="plac marg-rg col-lg-5 col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/11.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Pratim Sharma</h4>
                        </div>

                        <div class="title">
                            ForceBolt (2022)
                        </div>
                        <div class="title">
                           Package (3.5 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>

                    <div class="plac marg-rg col-lg-5 col-12">
                        <div class="inn-place">
                            <div class="place-img">
                                <img src="{{ asset('images/placements/10.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="title">
                            <h4>Ashutosh Kumar</h4>
                        </div>

                        <div class="title">
                            Wipro (2022)
                        </div>
                        <div class="title">
                           Package (3.5 lac)
                        </div>
                        <!-- <div class="more">
                            <a href="{{ url('') }}" type="button" class="btn btn-dark">Read More</a>
                        </div> -->
                    </div>


                </div>

            </div>
        </div>

    </div>
</section>

        </div>
    </div>
</section>

@include('includes.footer')
