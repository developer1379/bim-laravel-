<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>faculty Name</title>
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
     <row> <h4 class="text-danger text-center"> FACULTY DETAILS</h4></row>

    <div class="pdf-container">
    
     <table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col"> S.No</th>
      <th scope="col">Name of the faculty member </th>
      <th scope="col">Designation</th>
      <th scope="col">Highest degree</th>
      <th scope="col">University </th>
      <th scope="col">Specialization</th>
      <th scope="col">Total years of experience</th>
     
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dr. Rama Raman Pandey </td>
      <td>Asstt. Prof.</td>
      <td>Ph.D</td>
      <td>DDU GU GKP </td>
      <td>Marketing & Finance</td>
      <td>15 Years</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mrs. Pinky Pandey</td>
      <td>Asstt. Prof. </td>
      <td>MBA</td>
      <td>AKTU. University</td>
      <td>HR & Finance</td>
      <td>14 Years</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ms. Praveen Yadav</td>
      <td>Asstt. Prof.</td>
      <td>MBA </td>
      <td>AKTU LKO </td>
      <td>H.R & Marketing</td>
      <td>2 Years 5Months</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Ms. Shristi Tripathi</td>
      <td>Asstt. Prof. </td>
      <td>B.Tech</td>
      <td>AKTU </td>
      <td>CSE</td>
      <td>2 Years</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Ms. Sonal Srivastava</td>
      <td>Asstt. Prof.</td>
      <td>MBA/M.Com</td>
      <td> DDU</td>
      <td>H.R & Marketing</td>
      <td>1yr</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Mr. Utkarsh Yadav </td>
      <td>Asstt. Prof. </td>
      <td>M.Com</td>
      <td>DDU</td>
      <td>Marketing</td>
      <td>0yr</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td> Ms. Akriti Tiwari</td>
      <td>Asstt. Prof.</td>
      <td>MBA</td>
      <td>AKTU </td>
      <td>H.R &Finance</td>
      <td>3yr</td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Mr. Arvind Pratap Singh </td>
      <td>Asstt. Prof.</td>
      <td>Ph.D </td>
      <td>Rama Kanpur </td>
      <td>HRM& OM</td>
      <td>5 years Academic, 5 years Industria;</td>
    </tr>
     <tr>
      <th scope="row">9</th>
      <td> Mr. Shubham Srivastava </td>
      <td>Asstt. Prof.</td>
      <td>MBA </td>
      <td>MMMUT </td>
      <td>Marketing & Finance</td>
      <td>2 years</td>
    </tr>
     <tr>
      <th scope="row">10</th>
      <td> Ms. Khushi Dixit </td>
      <td>Asstt. Prof.</td>
      <td>MBA </td>
      <td>MMMUT </td>
      <td>Finance Marketing</td>
      <td>6 Month</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td> Ms. Jagriti Verma </td>
      <td>Asstt. Prof.</td>
      <td>MBA</td>
      <td>MMMUT </td>
      <td>HRM& OM</td>
      <td>0 years</td>
    </tr>
     <tr>
      <th scope="row">12</th>
      <td>  Ms. Sameeksha Srivastava </td>
      <td>Asstt. Prof.</td>
      <td>M.Com</td>
      <td>University of

Lucknow </td>
      <td>Marketing</td>
      <td>9 Month</td>
    </tr>
  </tbody>
</table>

        <!--<embed src="{{ asset('../../../PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>


    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>