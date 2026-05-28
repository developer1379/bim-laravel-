<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MBA  Committee</title>
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
     <div class="row"> <h4 class="text-danger text-center"> Department Society (MBA) Committee</h4>

 <h5 class="text-danger text-center">(Even Sem. Jan. to Jun. 2026)</h5>

 <p><ul><li>Head of Department: Dr. Deepika seth </li>  
<li>Faculty Coordinator: Mr. Amitesh Mani Tripathi (Placement Coordinator)</li>
                                        <li> Ms. Shreya Srivastava (SD Coordinator)</li>
                                        <li> Ms. Akriti Tiwari (Research Coordinator)</li>
                                         <li>Mr. Shubham Srivastava (Facility Coordinator)</li>

                                     </ul>

                                 </p>


     </div>

      <table class="table table-striped">
  <thead>
     <tr><td> Student Coordinators: </td></tr>
    <tr>
      <th scope="col"> S.No</th>
       <th scope="col">Class/Section </th>
      <th scope="col">Name </th>
     <th scope="col">Roll No.</th>
     <th scope="col">Designation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2A </td>
      
      <td>UJJWAL PANDEY</td>
      <td>2512120700206 </td>
      
      <td>President</td>
        
     
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>2A</td>
     
      <td>TABREZ ALI </td>
       <td>2512120700201 </td>
      
      <td>Secretary</td>
    </tr>

     <tr>
      <th scope="row">3</th>
      <td>2(A,B)</td>
     
      <td>ANUPRIYA SRIVASTAVA <br>
SHRISHTY UMAR

 </td>
       <td>2512120700040 <br>
2512120700183
</td>
      
      <td>Student Research Coordinators

</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>2(A,B)</td>
     
      <td>ANUSHKA GUPTA<br>SURAJ MISHRA</td>
       <td>2512120700041 <br>
2512120700198
 </td>
      
      <td>Student Placement<br> Coordinators</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>2(A,B)</td>
     
      <td>DIVYANSH  SRIVASTAV <br>
PRIYANSH GUPTA
 </td>
       <td>2512120700067 <br>
2512120700140
 </td>
      
      <td>Student SD Coordinators</td>
    </tr>

    
     </tbody>
</table>

    <div class="pdf-container">
    
    

      <!-- <embed src="{{ asset('../../../PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>


    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>