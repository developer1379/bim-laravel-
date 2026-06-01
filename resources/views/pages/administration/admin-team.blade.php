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
<row> <h4 class="text-danger text-center"> Administrative Committee</h4></row>

    <div class="pdf-container">
    
     <table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col"> S.No</th>
      <th scope="col">Department </th>
      <th scope="col">Name of Committee Members</th>
      <th scope="col">Designation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Administratation </td>
      <td>Dr Abhishek Kumar Tripathi</td>
      <td>Director</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Administratation</td>
      <td>Mr. Abhinav Tripathi </td>
      <td>Registrar</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Depatment of Business Administration(UG)</td>
      <td>Dr. Rama Raman Pandey</td>
      <td>Head of Depatment </td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Depatment of Business Administration(PG)</td>
      <td>Dr. Deepika Seth </td>
      <td>Head of Depatment</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Depatment of Computer Application (BCA & MCA)</td>
      <td>Mr. Chhiteesh Rai</td>
      <td>Head of Depatment</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Placement</td>
      <td>Mr. Amitesh Mani Tripathi </td>
      <td>Assistant Professor / Head of Placement</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td> Research</td>
      <td>Mr. Sudhir Shukla</td>
      <td>Assistant Professor / Head of Research</td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Skill Development </td>
      <td>Ms. Shreya Srivastava</td>
      <td>Assistant Professor/ Head of Skill Development </td>
    </tr>
     <tr>
      <th scope="row">9</th>
      <td> Facility </td>
      <td>Mr. Shubham Srivastava</td>
      <td>Assistant Professor/ Head of Facility </td>
    </tr>
     <tr>
      <th scope="row">10</th>
      <td> Publicity</td>
      <td>Dr. Shrikant Mani Tripathi</td>
      <td>Assistant Professor/ Head of Publicity </td>
    </tr>
  </tbody>
</table>

        <!--<embed src="{{ asset('PDF/admin-team.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />-->
    </div>
@endsection
