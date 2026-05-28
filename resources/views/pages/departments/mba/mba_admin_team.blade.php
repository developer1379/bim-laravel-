<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MBA Administrative Committee</title>
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
    @include('includes.inner_mba')
    <!-- Carousel Start -->
     <row> <h4 class="text-danger text-center"> MBA Administrative Committee</h4></row>

    <div class="pdf-container">
    
     <table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col"> S.No</th>
      <th scope="col">NAME OF THE FACULTY </th>
     <th scope="col">DIVISION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dr. Abhishek Kumar Tripathi </td>
      
      <td>Director</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Dr. Deepika Seth</td>
    
      <td>H.O.D
HR, Academic, SW,
Registration, FDP/FAR, Accreditation, Infra,
Revenue

</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mr. Abhinav Tripathi</td>
     
      <td>Registrar/Examination </td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Mr. Amitesh Mani Tripathi</td>
      
      <td>Placement</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Ms. Shreya Srivastava</td>
     
      <td>S.D./Proctor</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Mr. Abhay Upadhyay</td>
     
      <td>NSS-Punya</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td> Mr. Shubham Srivastav</td>
      
      <td>Facility</td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Ms. Akriti Tiwari </td>
      
      <td>Research </td>
    </tr>
     </tbody>
</table>

        <!--<embed src="{{ asset('../../../PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>


    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>