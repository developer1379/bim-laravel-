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
    <div class=" row">
        <div class="col-md-1 col-ls-1 col-sm-1"></div>
    <div class="col-md-10 col-ls-10 col-sm-10">
        <div class="col-md-4 col-lg-4 col-sm-4"><span class="text-left"> Ref. No.: BIM/DO/2024-25/021 </span></div>

        <div class="col-md-4 col-lg-4 col-sm-4"></div>

        <div class="col-md-4 col-lg-4 col-sm-4"><span class="text-rigt"> Date: 06-09-2024   </span></div>

    </div>
    <div class="col-md-1 col-ls-1 col-sm-1"></div>
    
    </div>
        <div class="row">
                    <h4 class="text-center">  BOARD OF GOVERNORS </h4>
                    <h5 class="text-center"> (Session 2024-25)</h5>
                <div class="col-md-1 col-lg-1">  </div>

                      
                <div class="col-md-10 col-lg-10">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                              <th scope="col">S.No</th>
                              <th scope="col">Particular </th>
                              <th scope="col">Name </th>
                              <th scope="col">Qualification</th>
                              <th scope="col">Occupation</th>
                              <th scope="col">Official Address </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                              <th scope="row">1</th>
                              <td>Chairman</td>
                              <td>Dr. Ram Avatar Agrawal </td>
                              <td>MBBS, MS</td>
                               <td>Doctor</td>
                                <td>Agrawal Orthopaedic Jubli Road Gorakhpur</td>
                        </tr>
                        <tr>
                              <th scope="row">2</th>
                              <td>Member </td>
                              <td>Dr. Rajat Agrawal </td>
                              <td>MBBS, MS</td>
                              <td>Doctor</td>
                              <td>Agrawal Orthopaedic Jubli Road Gorakhpur</td>
                        </tr>
                        <tr>
                              <th scope="row">3</th>
                              <td>Professor of Institute </td>
                              <td>Prof. Awadhesh Kumar Tiwari </td>
                              <td>M.Com, Ph.D </td>
                              <td>Professor</td>
                              <td>Buddha Institute of Management,GIDA ,Gorakhpur </td>
                        </tr>
                        <tr>
                              <th scope="row">4</th>
                              <td>Technologist /Educationist to be  nominated by society</td>
                              <td>Prof. R.P. Mani </td>
                              <td>M.Sc. Ph.D</td>
                              <td>Professor</td>
                              <td>MMM University of Technology,Gorakhpur </td>
                        </tr>
                        <tr>
                              <th scope="row">5</th>
                              <td>Industrialist/ Educationist to be nominated by society </td>
                              <td>Dr. Arif Mohhamad </td>
                              <td>MBA, Ph.D</td>
                              <td>Industrialist </td>
                              <td>GIDA, Gorakhpur </td>
                        </tr>
                        <tr>
                              <th scope="row">6</th>
                              <td>Technologist /Educationist to be  nominated by University </td>
                              <td>Prof. Manish Mishra </td>
                              <td>M.Sc. Electronic, Ph.D </td>
                              <td>Professor </td>
                              <td>DDUGU, Gorakhpur</td>
                        </tr>
                        <tr>
                              <th scope="row">7</th>
                              <td>Industrialist Educationist  nominated by society </td>
                              <td>Dr. Prashant Tripathi</td>
                              <td>MBA, Ph.D</td>
                              <td>Industrialist</td>
                              <td> Radio Mantra Gorakhpur </td>
                        </tr>
                        <tr>
                              <th scope="row">8</th>
                              <td>Assistant Professor of the  Institute </td>
                              <td>Mr. Rama Raman Pandey</td>
                              <td>MBA,B.Com, NET </td>
                              <td>Assistant Professor</td>
                              <td>Buddha Institute of Management,GIDA ,Gorakhpur</td>
                        </tr>
                        <tr>
                              <th scope="row">9</th>
                              <td>Nominee of State Govt.(Ex.officio)</td>
                              <td>Prof. Ashwani</td>
                              <td>Ph.D</td>
                              <td>RHEO Gorakhpur</td>
                              <td>Canal Road, Daudpur, Gorakhpur</td>
                              
                        </tr>
                        <tr>
                              <th scope="row">10</th>
                              <td>Industrialist/Technologist/ Educationist to be nominated  by society </td>
                              <td>Mr. Anil KumarYadav</td>
                              <td>M.Com, Ph.D</td>
                              <td>Professor</td>
                              <td>DDU ,GKP University,GKP </td>
                        </tr><tr>
                              <th scope="row">11</th>
                              <td>Member Secretary</td>
                              <td>Dr. Abishek Kumar Tripathi </td>
                              <td>M.Com, MBA,Ph.D </td>
                              <td>Professor </td>
                              <td>Buddha Institute of Management,GIDA ,Gorakhpur</td>
                        </tr>
                      </tbody>
                </table>


                </div>
                <div class="col-md-1 col-lg-1">  </div>
            

      

        </div>


    <!--<div class="pdf-container">
        <embed src="{{ asset('PDF/BOG.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />
    </div>-->


    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>