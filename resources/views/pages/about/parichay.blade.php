@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_bgi',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container">
        <section id="about-us" style="padding: 40px; font-family: Arial, sans-serif;">
            <h2 class="text-center fw-bold text-uppercase"> About the Institution</h2>
            <h4 class="text-danger">BIM : YOUR GATEWAY TO THE PROFESSIONAL WORLD !!</h4>

            <p>
                <strong>Buddha Institute of Management (BIM)</strong> is a premier institution dedicated to excellence in management 
and technical education. The institute is approved by All India Council for Technical Education and affiliated 
with Dr. A.P.J. Abdul Kalam Technical University, Lucknow.
            </p>

            <p>
                Established with the vision of nurturing competent professionals and responsible citizens, BIM has 
consistently focused on delivering quality education, innovation, and industry-oriented learning. The 
institution aims to bridge the gap between academic knowledge and real-world application through a 
structured and dynamic learning ecosystem.
            </p>

            <p>
                BIM also houses a cutting-edge <strong>Business Simulation Lab</strong> and <strong>Entrepreneurship Incubation Centre</strong> to foster real-world business skills and innovation among management students.
            </p>

            <h4 class="text-danger">Institutional Profile:</h4>
            <ul>
                <li><strong>Name of the Institution:</strong> ABuddha Institute of Management.</li>  
                <li><strong>Approval:  </strong> AICTE Approved</li>
                <li><strong>Affiliation:   </strong> Dr. A.P.J. Abdul Kalam Technical University, Lucknow</li>
                <li><strong>Location:  </strong> Near Gorakhpur, Uttar Pradesh.</li>
                <li><strong>Programs Offered:  </strong> Management and Computer Applications</li>
                <!--<li><strong>Digital Learning:</strong> Smart classrooms, online resources, and access to global business journals and databases.</li>
                <li><strong>Workshops & Seminars:</strong> Frequent seminars on emerging trends like AI in Business, FinTech, Digital Marketing, and Data Analytics.</li>
                <li><strong>Student Clubs:</strong> Active clubs for Marketing, Finance, HR, Entrepreneurship, and Cultural activities that build leadership and teamwork.</li>
                <li><strong>Library:</strong> A modern library with thousands of books, e-journals, and business magazines, plus an e-library with internet access.</li>
                <li><strong>Hostel Facilities:</strong> Safe and hygienic separate hostels for boys and girls with mess, gym, Wi-Fi, and recreational spaces.</li>
                <li><strong>Mentorship System:</strong> Personalized mentorship and career guidance for each student to track and support their progress.</li>
                <li><strong>Incubation & Innovation:</strong> Startup mentoring and seed funding support through the Entrepreneurship Development Cell.</li>
                <li><strong>Social Responsibility:</strong> Community outreach and CSR activities to build socially responsible leaders.</li>
                <li><strong>Green Campus:</strong> A peaceful and eco-friendly environment that fosters focused learning and well-being.</li>-->
            </ul>
            <h4 class="text-danger">Academic Programs & Intake</h4>

             <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">S.No </th>
                              <th scope="col">Program </th>
                              <th scope="col">Intake </th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>MBA</td>
                              <td>180</td>
                              
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>BBA</td>
                              <td>180</td>
                              
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>BCA </td>
                             <td>180</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>MCA </td>
                              <td>60</td>
                              
                            </tr>
                          </tbody>

            </table>
                         <p class="text-success"> All programs are designed in accordance with the curriculum prescribed by AKTU and are regularly 
      updated to meet industry requirements and emerging trends.</p>

             <h4 class="text-danger">Academic Strengths</h4> 

              <ul>
                <li>Outcome-based education aligned with <strog>NAAC/NBA quality frameworks</strog></li>  
                <li>Use of <strong>case studies, project-based learning, and experiential pedagogy</strong></li>
                <li>Continuous internal evaluation and performance monitoring </li>
                <li>Qualified and experienced faculty members</li>
                <li>Focus on interdisciplinary learning and skill enhancement  </li>
               
            </ul>

             <h4 class="text-danger"> Infrastructure & Learning Resources</h4>
             

             <ul>
                <li>Smart classrooms with ICT-enabled teaching </li>  
                <li>Well-equipped computer laboratories</li>
                <li>Library with academic resources and digital access</li>
                <li>Seminar halls and conference facilities </li>
                <li>Green and eco-friendly campus environment  </li>
               
            </ul>

             <h4 class="text-danger">Research, Innovation & Extension</h4>
             <h6>BIM promotes a culture of research and innovation by encouraging:</h6>

             <ul>
                <li>Faculty and student research publications</li>  
                <li>Participation in conferences, FDPs, and workshops </li>
                <li>Industry-based projects and internships </li>
                <li>Entrepreneurial initiatives and startup awareness</li>
                
               
            </ul>

             <h4 class="text-danger">Student Development & Support </h4>

             <ul>
                <li><strong>Personality development and soft skills training</li>  
                <li><strong>Co-curricular and extracurricular activities  </li>
                <li><strong>Mentoring and counseling support</li>
                <li><strong>Leadership and teamwork opportunities </li>
              
               
            </ul>

             <h4 class="text-danger">Location Advantage</h4>
             <h6>  Strategically situated on the Gorakhpur–Lucknow National Highway (NH-28), the institute enjoys  
     excellent connectivity:</h6>

             <ul>
                <li><strong>12 km from Gorakhpur Bus Station  </li>  
                <li>15 km from Gorakhpur Railway Station</li>
                <li>16 km from Airport </li>

            
               
            </ul>
             <p class="text-success"> The serene and accessible campus provides an ideal environment for academic pursuits.</p>

             <h4 class="text-danger"> Institutional Distinctiveness</h4>
             <h6> BIM distinguishes itself through:</h6>

             <ul>
                <li>Strong <strong>academic-industry integration </strong></li>  
                <li>Emphasis on <strong> innovation and practical learning</strong>  </li>
                <li>Eco-friendly campus with modern infrastructure </li>
                <li>Focus on <strong>ethical values and leadership development</strong></li>
               
               
            </ul>

        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
