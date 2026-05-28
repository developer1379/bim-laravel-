<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOG - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
    <style>
        /* Style for the PDF container with background color */
        .pdf-container {
            background-color: #ffffff; /* Blue background */
            padding: 20px; /* Optional padding */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive styling for the embedded PDF */
        .pdf-container embed {
            width: 100%;
            max-width: 800px; /* Maximum width for larger screens */
            height: 90vh; /* Height adapts to viewport */
        }

        /* Adjust padding and container width for smaller screens */
        @media (max-width: 768px) {
            .pdf-container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    @include('includes.navbar1')
    <!-- Carousel Start -->
    
    <div class="row">
         <div class="lg-2 col-md-2 co-sm-2 col-xs-2"></div>
        
         <div class="lg-8 md-8 sm-10 xs-8">
             
          <h6 class="strong text-center">REGULAR LECTURES </h6>
          <p class="text-justify">Teaching is a dynamic process and hence Institute has engaged strong team of qualified faculty members having long experience of industry & academics.</p>
          <p class="text-justify"> In addition, resource persons and guest speakers are also invited from the Institutions and organizations of National and International repute. Our emphasis is on the interactive mode of learning. </p>
          <hr>

          <h6 class="strong text-center">ASSIGNMENTS  </h6>
          <p class="text-justify">Students are given on line and offline Assignments in order to develop their explanatory power in writing on a regular basis. Performance in these applied assignments is the part of Internal Assessment. </p>
        
 <hr>
          <h6 class="strong text-center">SEMINARS  </h6>
          <p class="text-justify">A part from regular classroom seminars to inculcate the power of presentation among the students, Institute organizes every year a National Seminar on current topics of Socio-economic fabric of the Industrial world.  </p>
          <p class="text-justify"> Students are also encouraged to present research papers/articles in a special session dedicated to them only. The audio-visual presentation is an integral part of such seminars. </p>
 <hr>
          <h6 class="strong text-center">SYMPOSIUM  </h6>
          <p class="text-justify">Symposia are also organized by the Institute to make students aware of the particular subject/topic. Students are benefited by the views of experts during the panel discussions of the symposia. </p>
         
 <hr>
          <h6 class="strong text-center">GROUP DISCUSSION </h6>
          <p class="text-justify">In order to ignite the creativity among the students' group discussions along with Brain-Storming sessions are organized. In such sessions, students are given a problem and asked to suggest a feasible solution with the help of a moderator. </p>
          
 <hr>
          <h6 class="strong text-center">SYNDICATES </h6>
          <p class="text-justify">In order to develop Team spirit syndicates are formed among the students and given an objective to be achieved by working together as a team. </p>
          
          <h6 class="strong text-center">SIMULATION </h6>
          <p class="text-justify">Simulationisaprocesswhichinvolvesaparticularsetofconditions.theseconditionsareartificially created in order to study or experience the happenings that could exist in reality. </p>
          <p class="text-justify"> These techniques involve ROLEPLAYING, COMPUTER SIMULATED GAMES and the development of various simulation model.  </p>
 <hr>
          <h6 class="strong text-center">CASE STUDY </h6>
          <p class="text-justify">Students are given various cases and asked to suggest various feasible solutions as per their opinion.</p>
          
 <hr>
          <h6 class="strong text-center">BUSINESS/IT GAMES </h6>
          <p class="text-justify">Students are encouraged to develop decision-making skills with the help of various Management Games. Special sessions are arranged for this purpose. </p>
          <p class="text-justify"> Core and Guest faculties organizes such sessions on regular basis. </p>

 <hr>
          <h6 class="strong text-center">QUIZ  </h6>
          <p class="text-justify">Written and Oral (Open &Team) quizzes are also organized for the students in order to make them aware of current affairs. </p>
          


 <hr>
          <h6 class="strong text-center">CDS AND FILMS  </h6>
          <p class="text-justify">Institute also has a fully developed Audio-visual room fitted with LCD T.V. and LCD overhead projectors a part from other ICT aids like magnetic board etc. Students are shown these CDs and Films related to their subjects. </p>
          <p class="text-justify"> The session is followed by discussions in order to bring out there al message of the film or to initiate debate among students with reference to CDs.  </p>
 <hr>
          <h6 class="strong text-center">INDUSTRIAL TOUR </h6>
          <p class="text-justify">For exposure to practical problems faced by managers in companies and their plants, visits to reputed companies are a regular feature. Industrial tours are also organized from time to time. Participation in plant visits is mandatory. </p>
          
 <hr>
          <h6 class="strong text-center">FUN TRIPS</h6>
          <p class="text-justify">Fun trips are also organized to in fuse vitality, energy and to give exposure to nature and the real world. </p>
          
 <hr>
          <h6 class="strong text-center">SUMMERP ROJECT/ TRAINING </h6>
          <p class="text-justify">Students of various courses have to undertake summer project/training in companies of repute, as part of the course curriculum. </p>
          <p class="text-justify"> The project report/thesis sanintensive learning exercise for students to apply particular the cortical concepts into practical situations as experienced in industrial establishments.  </p>
 <hr>
          <h6 class="strong text-center">FIELD PROJECTS </h6>
          <p class="text-justify">Students of Management course are required to undertake field projects as a part of their curriculum. These field projects are guided by a faculty guide. </p>
          

 <hr>
          <h6 class="strong text-center">PRACTICALS   </h6>
          <p class="text-justify">Practical assignments are an integral part of a Professional Course. Therefore, to explore the students, we impart technical expertise along with practical’s for the proper understanding of a subject matter. Our laboratories are equipped with the latest model so equipment. However, for continuous development and updating of these types of equipment, we keep a close watch on development/changes which are taking place globally for the procurement of many advanced version of the lab. Equipment and thus to ensure students working with most updated and advanced equipments. </p>
         



         </div> 

         <div class="lg-2 col-md-2 co-sm-2 col-xs-2"></div>

    </div>
        
    <!--<div class="pdf-container">
        <embed src="{{ asset('PDF/padagoy.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />
    </div>-->


    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>