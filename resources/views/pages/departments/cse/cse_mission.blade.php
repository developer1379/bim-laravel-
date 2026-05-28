@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('../../../images/sliders/cse/lab5.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/cse/lab2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('../../../images/sliders/cse/lab4.jpg') }}" alt="slider3" title="slider3" />
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
                                                <a href="{{ url('../../../cse') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/cse/cse_mission') }}">Vision and Mission </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../head_cse') }}">Head Desk</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../faculties_cse') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('../../../lab_cse') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/cse/cs_gallery') }}">Gallery</a>
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
                    <div class="er-txt">
                        <h4 style="font-weight: bold;">Vision</h5>
                            <hr>
                            <p style="text-align: justify;">To achieve high standard in learning by imparting good-quality education for creating technically sound manpower of global standard capable of solving complex scientific, technological as well as societal problems.</p>

                            <h4 style="font-weight: bold;">
                                Mission
                            </h4>
                            <hr>
                            <p style="text-align: justify;"><b>[M1]:</b> To develop a center of excellence for
                                professional education by enriching facilities
                                for high standard academic delivery, R & D
                                and strong industrial interface.
                            </p>
                            <p style="text-align: justify;"><b>[M2]:</b>
                                To create and develop sustaining professional
                                etiquettes among students so that quality
                                professionals can be produced who can
                                contribute in development of the society and
                                country.</p>


                            <h4 style="font-weight: bold;">
                                PROGRAM EDUCATIONAL OBJECTIVES(PEOs)
                            </h4>
                            <hr>

                            <p style="text-align: justify;"><b> [PEO 01]:</b> Graduates of the program will be engaged in the effective practice of computer science and
                                engineering to identify and solve important problems in a diverse range of application areas.
                            </p>
                            <p style="text-align: justify;"><b> [PEO 02]:</b> To educate students with proficiency in Computer science & Engineering as well as other
                                related field so as to understand, analyze, design and synthesize data and technical concepts
                                to create unique products and solutions for the real life problems for the social upliftment.

                            </p>
                            <p style="text-align: justify;"><b> [PEO 03]:</b> Graduates of the program will engage in successful careers in industry, academia and attain
                                positions of importance where they have an impact on their business, profession as well as
                                community.

                            </p>
                            <p style="text-align: justify;"><b> [PEO 04]:</b> Graduates of the program will adapt to contemporary technologies, tools and methodologies
                                to remain at the frontier of computer science and engineering practice with the ability to
                                respond to the need of a challenging environment.

                            </p>


                            <h4 style="font-weight: bold;">
                                PROGRAM OUTCOMES(POs)
                            </h4>
                            <hr>

                            <p style="text-align: justify;"><b> PO1: Engineering knowledge</b>Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.
                            </p>
                            <p style="text-align: justify;"><b> PO2: Problem Analysis:</b> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.

                            </p>
                            <p style="text-align: justify;"><b> PO3: Design/development of solutions:</b> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.
                            </p>
                            <p style="text-align: justify;"><b> PO4: Conduct investigations of complex problems: </b> Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.

                            </p>
                            <p style="text-align: justify;"><b> PO5: Modern tool usage: </b>Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.
                            </p>
                            <p style="text-align: justify;"><b>PO6: The engineer and society: </b> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.

                            </p>
                            <p style="text-align: justify;"><b>PO7: Environment and sustainability: </b>: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</p>
                            <p style="text-align: justify;"><b>PO8: Ethics: </b> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.

                            </p>
                            <p style="text-align: justify;"><b>PO8: Ethics: </b> : Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.
                            </p>
                            <p style="text-align: justify;"><b>PO9: Individual and team work: </b> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.

                            </p>
                            <p style="text-align: justify;"><b>PO10: Communication:</b> Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.

                            </p>
                            <p style="text-align: justify;"><b>PO11: Project management and finance:</b> Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.
                            </p>
                            <p style="text-align: justify;"><b>PO12: Life-long learning:</b> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.

                            </p>
                            <h4 style="font-weight: bold;">
                                PROGRAM SPECIFIC OUTCOMES (PSOs)
                            </h4>
                            <hr>
                            <p style="text-align: justify;"><b>[PSO 1]: </b> The ability to understand, analyze and develop computer programs in the areas related to
                                algorithms, web design, data analysis for efficient computer-based systems of different
                                complexity

                            </p>
                         
                            <p style="text-align: justify;"><b>[PSO 2]: </b> The ability to understand the transformative changes in computing, apply usual practices and 
               strategies in software project development using open-source programming environments to 
              deliver a quality product for real world problems and meet the challenges of the future.

                            </p>
                            <p style="text-align: justify;"><b>[PSO 3]: </b>  The ability to employ modern computer languages, environments and platforms in creating 
               innovative career paths to be an entrepreneur, lifelong learning and an eagerness for higher 
               studies.

                            </p>

                            
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
