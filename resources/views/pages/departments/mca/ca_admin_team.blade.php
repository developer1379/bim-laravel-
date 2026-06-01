@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_bca',
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
<row> <h4 class="text-danger text-center"> CA Administrative Committee</h4></row>

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
      <td>HOD </td>
      
      <td> Mr. Chhiteesh Rai</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Placement Coordinator </td>
    
      <td>Mr. Shri Kant Mani Tripathi

</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>SD Coordinator </td>
     
      <td>Ms. Sharvani Gupta </td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Research Coordinator </td>
      
      <td>Mr. Sudhir Shukla</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Research Coordinator /td>
     
      <td>Ms. Shivangi Srivastava<</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Examination Coordinator </td>
     
      <td>Mr. Dhananjay Yadav</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td> Facility Coordinator </td>
      
      <td>Mrs. Aditi Aeran</td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Facility Coordinator  </td>
      
      <td>Mr. Suraj Kumar Mishra </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Proctor   </td>
      
      <td>Mr. Aman Samogar </td>
    </tr>
     </tbody>
</table>

        <!--<embed src="{{ asset('../../../PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>
@endsection
