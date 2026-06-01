@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
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
@endpush

@section('content')
<row> 
         <h4 class="text-danger text-center text-uppercase"> Notice</h4>
         <row>
        <h5 class="text-success text-left">Administrative Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
           
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>

    <div class="pdf-container">
    
     <table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col"> S.No</th>
      <th scope="col">Department </th>
      <th scope="col">Name of Committee Members</th>
    
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <th scope="row">1</th>
      <td>Administratation</td>
      <td>Mr. Abhinav Tripathi </td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Depatment of Business Administration(UG)</td>
      <td>Dr. Rama Raman Pandey</td>
    
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Depatment of Business Administration(PG)</td>
      <td>Dr. Deepika Seth </td>
     
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Depatment of Computer Application (BCA & MCA)</td>
      <td>Mr. Chhiteesh Rai</td>
     
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Placement</td>
      <td>Mr. Amitesh Mani Tripathi </td>
      
    </tr>
     <tr>
      <th scope="row">6</th>
      <td> Research</td>
      <td>Mr. Sudhir Shukla</td>
      
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>Skill Development </td>
      <td>Ms. Shreya Srivastava</td>
   
    </tr>
     <tr>
      <th scope="row">8</th>
      <td> Facility </td>
      <td>Mr. Shubham Srivastava</td>
      
    </tr>
     <tr>
      <th scope="row">9</th>
      <td> Publicity</td>
      <td>Dr. Shrikant Mani Tripathi</td>
     
    </tr>
  </tbody>
</table>

        <!--<embed src="{{ asset('PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>


     
       <row>
        <h5 class="text-success text-left">Placement Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> Mr. Amitesh Mani tripathi</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>

    <div class="pdf-container">
    
     <table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col"> S.No</th>
      <th scope="col">Department </th>
      <th scope="col">Placement Coordinator</th>
    
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <th scope="row">1</th>
      <td>Business Administration (UG)</td>
      <td>Mr. Abhay Upadhayay </td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Business Administration (PG)</td>
      <td>Mr. Amitesh Mani tripathi</td>
    
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Computer Aplication</td>
      <td>Mr. Shrey Srivastava </td>
     
    </tr>
     <tr>
     
    </tr>
   
    
  </tbody>
</table>

        <!--<embed src="{{ asset('PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>


       <row>
        <h5 class="text-success text-left">Skill Development Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> Ms. Shreya Srivastava</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Society </th>
                  <th scope="col">SD Coordinators</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                  <td>Fusion</td>
                  <td>Ms. Khushi Dixit </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                  <td>Pinnacle  </td>
                  <td>Ms. Shreya Srivastava</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
                  <td>Codex </td>
                  <td>Ms. Sarvani Gupta  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>



 <row>
        <h5 class="text-success text-left">Research Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> Mr. Sudhir Shukla</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Research Coordinators</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Mrs. Pinky Pandey </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Ms. AKriti Tiwari</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Ms. Shivangi Srivastava  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

    <row>
        <h5 class="text-success text-left">Examination Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> Mr. Abhinava Ram Trpathi</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Examinaton Coordinators</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Ms. Sonal Srivastava </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Mr. Abhinava Ram Trpathi</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Mr. Dhanjay Yadav  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>


    <row>
        <h5 class="text-success text-left">Proctorial Board</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> Mr. Dhanjay Yadav</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Department Proctor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Ms. Shristi Tripathi </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Ms. Shreya Srivastava</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Mr. Aman Samoar  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>


     <row>
        <h5 class="text-success text-left">Antiragging Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Senior Faculty From Different Department</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Chief Proctor</td>
                
                  <td>Mr. Dhanjay Yadav </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Dr. Rama Raman Pandey </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Dr. Deepika Seth</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Computer Application</td>
               
                  <td>Mr. Chhiteesh Rai  </td>
                </tr>
                 <tr>
                  <th scope="row">5</th>
                  <td>Women Empowerment</td>
               
                  <td>Mrs. Pinki Pandey  </td>
                </tr>
                 <tr>
                  <th scope="row">6</th>
                  <td>Member</td>
               
                  <td>Mr. Abhinav Ram Tripathi </td>
                </tr>
                 <tr>
                  <th scope="row">7</th>
                  <td>Student Representative</td>
               
                  <td>Mr. Radhey Shyam </td>
                </tr>
                 <tr>
                  <th scope="row">8</th>
                  <td>Parents</td>
               
                  <td>Mr. Arun Pandey </td>
                </tr>
                 <tr>
                  <th scope="row">9</th>
                  <td>Member</td>
               
                  <td>Mr. Shashi Kant Jaiswal <br> Mr. Shashi Kant Rai </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

     <row>
        <h5 class="text-success text-left">Internel Complaint Committee / Women Empowerment Cell</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Femail Members</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Ms. Pinki Pandey </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Ms. Shristi Thipathi</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Mrs. Aditi Aeran </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

     <row>
        <h5 class="text-success text-left">Grievance Redressal Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> </li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Senior Faculty Members </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Dr.Rama Raman Pandey </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Ms. Deepika Seth</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Mr. Chhiteesh Rai </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td> Administration</td>
               
                  <td>Mr. Vijay Srivastava </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>HR</td>
               
                  <td>Mr. Santosh Tripathi </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td> Male CR From Higher Semester</td>
               
                  <td>Mr. Radhey Shyam </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td> Female CR from Higher Semester </td>
               
                  <td>Ms. Suruchi Yadav  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td> External Member</td>
               
                  <td>Mr. Shamsul Haque Khan  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

     <row>
        <h5 class="text-success text-left">Facility Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> Mr. Subham Srivastava</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Facility Coordinators </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Mr.Praveen Yadav  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Mr. Shubham Srivastava</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Ms.Aditi Arean  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

     <row>
        <h5 class="text-success text-left">Student Welfare Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li><strong>Convenor:</strong> </li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Name of Coordinator</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Dr.Rama Raman Pandey </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Ms. Deepika Seth</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Mr. Chhiteesh Rai  </td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

     <row>
        <h5 class="text-success text-left">NSS Cell (Punya)Committee</h5>
        <h6 class="text-warning text-left">Even Semester (Jan-June – 2026) </h6>

        <p> <ul>
            <li><strong>Chairperson:</strong> Dr. Abhishek Kumar Tripathi</li>
            <li> Committee Members –  </li>



            </ul>
        </p>

     </row>
    <div class="pdf-container">

          <table class="table table-striped">
              <thead>
                 
                <tr>
                  <th scope="col"> S.No</th>
                  <th scope="col">Department </th>
                  <th scope="col">Name of Departmental  Coordinator  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Business Administration(UG)</td>
                
                  <td>Mr.Praveen Yadav </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Business Administration(PG)</td>
                 
                  <td>Mr. Shubham Srivastava</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computer Application</td>
               
                  <td>Ms.Aditi Arean</td>
                </tr>
                 
                
              </tbody>
            </table>
        
    </div>

    <div><br><a href="{{ asset('PDF/commeti.pdf') }}" class="btn btn-danger text-center" target="_blank">Read More Committee</a></div><br>
@endsection
