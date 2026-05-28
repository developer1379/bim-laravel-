<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBA</title>
    <link href="{{ asset('../../../Includes/styles.css') }}" rel="stylesheet" />
    
    <link rel="icon" type="image/x-icon" href="{{ asset('../../../Images/logo.png') }}">
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
    @include('includes.inner_bba')
    <!-- Carousel Start -->

       <row><h4 class="text-danger text-center text-uppercase"> Notice</h4>
        <h5 class="text-success text-left">Department Society (FUSION) Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Head of Department:</strong>  Dr. Rama Raman Pandey</li>
            <li><strong>Faculty Coordinator:</strong> Mr. Abhay Upadhyay (Placement Coordinator) </li>
            <li> Committee Members –   Ms. Khushi Dixit (SD Coordinator) | 
                                       Mrs. Pinky Pandey (Research Coordinator) 
                                       
 </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Class/Sectio  </th>
                  <th scope="col">Name   </th>
                  <th scope="col">Roll No. </th>
                  <th scope="col">Designation </th>
                  <th scope="col">Reason for Selection</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>4<sup>th</sup> A</td>
                  <td>MR. ADITYA TIWARI</td>
                  <td> 2412121780003 </td>
                  <td>President(FUSION)</td>
                  <td>By Election </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2<sup>nd</sup> C</td>
                  <td>MR. SATYAM GUPTA  </td>
                  <td>2512121780147</td>
                  <td>Secretary (FUSION)</td>
                  <td>By Election </td>
                </tr>

                 <tr>
                  <th scope="row">3</th>
                  <td>4<sup>th</sup> B</td>
                  <td>Mr. SHEIKH DANISH FIROZ  </td>
                  <td>2412121780145</td>
                  <td>Student Placement Coordinators</td>
                  <td>On The Basis Of Their
Communication Skills
and Technical
Presentation </td>
                </tr>
                 <tr>
                  <th scope="row">4</th>
                  <td>4<sup>th</sup> A</td>
                  <td>Mr. ADITYA YADAV  </td>
                  <td>2412121780004</td>
                  <td>Student Placement Coordinators</td>
                  <td>On The Basis Of Their
Communication Skills
and Technical
Presentation </td>
                </tr>
                 <tr>
                  <th scope="row">5</th>
                  <td>4<sup>th</sup> A</td>
                  <td>Mr. ANSH SHAHI  </td>
                  <td>2412121780024</td>
                  <td>Student SD
Coordinators</td>
                  <td>On The Basis Of Their
Active Participation in technical activities </td>
                </tr>
                 <tr>
                  <th scope="row">6</th>
                  <td>4<sup>th</sup> A</td>
                  <td>MR. MOHD.
SADIQUE
HUSSAIN  </td>
                  <td>2512121780080</td>
                  <td>Student SD
Coordinators</td>
                  <td>On The Basis Of Their
Active Participation in technical activities </td>
                </tr>
                 <tr>
                  <th scope="row">7</th>
                  <td>4<sup>th</sup> A</td>
                  <td>MR. CHANDAN

KUMAR GUPTA  </td>
                  <td>2412121780045</td>
                  <td>Student
Research
Coordinators</td>
                  <td>On The Basis Of
TechYuva
Presentation </td>
                </tr>
                 <tr>
                  <th scope="row">8</th>
                  <td>4<sup>th</sup> B</td>
                  <td>Miss. SHUSHIL

CHAURASIA  </td>
                  <td>2512121780153</td>
                  <td>Student
Research
Coordinators</td>
                  <td>On The Basis Of
TechYuva
Presentation </td>
                </tr>
                 
                
                 
                
              </tbody>
            </table>
        
    </div>
   
 <hr>
 
   



    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>