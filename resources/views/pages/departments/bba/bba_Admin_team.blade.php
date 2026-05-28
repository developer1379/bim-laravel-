<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Team</title>
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
     <row> <h4 class="text-danger text-center"> BBA Administrative Committee</h4></row>

    <div class="pdf-container">
    
     <table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col"> S.No</th>
      <th scope="col">Designation </th>
      <th scope="col">Coordinator Name</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>HR, Acad., SW,
Registration, FDP/FAR,
Accreditation, Infra,
Revenue </td>
      <td>Dr. Rama Raman Pandey</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Research</td>
      <td>Mrs. Pinky Pandey </td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Facility</td>
      <td>Ms. Praveen Yadav</td>
     
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Proctor</td>
      <td>Ms. Shristi Tripathi</td>
     
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Skill Development</td>
      <td>Ms. Khushi Dixit</td>
      
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Examination</td>
      <td>Ms. Sonal Srivastava </td>
      
    </tr>
     <tr>
      <th scope="row">7</th>
      <td> Research</td>
      <td>Mr. Utkarsh Yadav</td>
      
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Research(MBA) </td>
      <td>Ms. Akriti Tiwari</td>
      
    </tr>
     <tr>
      <th scope="row">9</th>
      <td> Proctor</td>
      <td>Mr. Abhishek Kumar Gupta</td>
      
    </tr>
     <tr>
      <th scope="row">10</th>
      <td> Examination</td>
      <td>Ms. Jagriti Verma</td>
      
    </tr>
    <tr>
      <th scope="row">11</th>
      <td> NSS</td>
      <td>Ms.Sameeksha Srivastava</td>
      
    </tr>
  </tbody>
</table>

        <!--<embed src="{{ asset('../../../PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>


    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>