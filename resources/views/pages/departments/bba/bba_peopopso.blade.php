@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_bba',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<div class="container">
        <div class="row">
           <!-- <h3 class="text-center my-3 text-danger" style="text-transform: uppercase;">Program Educational Objectives (PEOs):</h3>-->
            <div class="card shadow py-3 px-3 my-3">
                <h5 class="text-danger" style="text-transform: uppercase;">Program Educational Objectives (PEOs):</h5>
                <p class="px-4 py-2">PEO1: To provide a holistic learning environment for developing better understanding of various business strategies.<br>
PEO2: To be able to develop entrepreneurial passion to establish and manage business ventures successfully.<br>
PEO3: To be able explore the area of Research in the different fields to help businesses to grow and innovate.<br>
PEO4: To develop managerial competence in various functional areas like HR, Marketing, Finance, Analytics etc.<br>
PEO5: To ensure employability and career growth of the students.

                </p>
            </div>
            <div class="card shadow py-3 px-3 my-5">
                <h5 class="text-danger" style="text-transform: uppercase;">Program Specific Outcomes (PSOs):</h5>
                <div class="px-4 py-2">
                    <p>PSO1: Students will exhibit understanding of broad business concepts and principles.<br>
PSO2: Students will exhibit critical thinking skills to address diverse business challenges and opportunities.<br>
PSO3: Students will be able to identify and define problems and opportunities.<br>
PSO4: Students will demonstrate problem solving skills by gathering and assessing appropriate information.<br>
PSO5: Students will demonstrate use of appropriate techniques to effectively manage business challenges.
</p>
                   
                </div>
            </div>
            <div class="card shadow py-3 px-3 my-5">
                <h5 class="text-danger" style="text-transform: uppercase;">Program Outcomes (POs): </h5>
                <div class="px-4 py-2">
                    <p class="text-danger"><i> On successful completion of the program, Graduates will be able:</i>
</p>
                    <p>PO1. To apply the domain knowledge, people skills and technical skills to different scenarios of the Business to achieve desired result.<br>
PO2. To analyze, understand and apply various research tools and techniques in innovate and sustaining Business activities and grow.<br>
PO3. To reduce the gap between industry and academia, with the right blend of theory and practice.<br>
PO4. To nurture their talent for becoming good leaders to be an assets for an organization and operate with entrepreneurial mind-set.<br>
PO5. To become a good citizen who is socially responsible, steeped in ethical values.

</p>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
