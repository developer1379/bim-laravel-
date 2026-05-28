@extends('layouts.site')

@section('content')
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
                                </div>
                            </div>
                          


                        </div>
                    </div>

                
                </div>
            </div>
            <div class="col-lg-8 bords pt-20 depart-marg">
                <div class="int-container">
                    <h4 class="college-head">Traning & Placement </h4>
                    <hr>
                    <div class="er-txt">
                        <p style="text-align: justify;">The Training & Placement Office, Buddha Institute of Technology facilitates the process of placement of students passing out from the Institute besides collaborating with leading organizations and institutes in setting up of internship and training program of students. The office liaises with various industrial establishments, corporate houses etc which conduct campus interviews and select graduate and post-graduate students from all disciplines. The Training & Placement Office provides the infra-structural facilities to conduct group discussions, tests and interviews besides catering to other logistics. The Office interacts with many industries in the country, of which nearly 100 companies visit the campus for holding campus interviews. The industries which approach the institute come under the purview of: Core Engineering industries CS & IT enabled services Manufacturing Industries Consultancy Firms.</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
