@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_bca',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<div class="container">
        <div class="row">
            <h3 class="text-center my-3 text-danger" style="text-transform: uppercase;">Vision & Mission</h3>
            <div class="card shadow py-3 px-3 my-3">
                <h5 class="text-danger" style="text-transform: uppercase;">Vision</h5>
                <p class="px-4 py-2">To be a leading center of excellence in computer applications, fostering innovation, creativity, and
research, and producing globally competent professionals who contribute to the development of
society through technological solutions.
                </p>
            </div>
            <div class="card shadow py-3 px-3 my-5">
                <h5 class="text-danger" style="text-transform: uppercase;">Mission</h5>
                <div class="px-4 py-2">
                    <p><b>M1.</b> To provide quality education in the field of computer applications by offering a comprehensive
curriculum and hands-on experience to meet the evolving needs of the IT industry.</p>
                    <p><b>M2.</b> To promote research and innovation in emerging areas of computer science and applications,
encouraging students and faculty to solve real-world challenges.</p>
                    
                    <p><b>M3.</b> To install professional ethics, communication skills, and leadership qualities that prepare
students for successful careers in academia, industry, and entrepreneurship.</p>

<p><b>M4.</b> To fosterindustry-academiacollaborationforprovidingstudentswithexposuretopractical
experiences through internships, workshops, and industry projects.</p>

<p><b>M5.</b> To develop lifelong learners who adapt to technological advancements and contribute to the
digital transformation.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
