@extends('layouts.site', [
    'headPartial' => 'pages.uncategorized.header',
    'headerPartial' => 'pages.uncategorized.header',
    'footerPartial' => 'pages.uncategorized.header',
    'scriptsPartial' => 'pages.uncategorized.header',
])

@push('head')
<style>
        .about-header {
        background-color: #5797cb;
        color: white;
        padding: 3rem 0;
        position: relative;
    }
    
    .about-header:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #5797cb, #145589, #5797cb);
    }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .board-section {
            background: white;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #1a237e;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #1a237e;
            font-size: 1.8em;
        }

        .member-card {
            padding: 15px;
            margin-bottom: 20px;
            border-left: 4px solid #2196F3;
            background: #f8f9fa;
            transition: transform 0.3s ease;
        }

        .member-card:hover {
            transform: translateX(10px);
        }

        .member-name {
            font-size: 1.2em;
            font-weight: bold;
            color: #1a237e;
            margin-bottom: 5px;
        }

        .member-position {
            color: #666;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px auto;
            }

            .board-section {
                padding: 20px;
            }
        }
    </style>
@endpush

@section('content')
<section class="about-header text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Editorial Board</h1>
        <p class="lead">BUDDHA JOURNAL OF MANAGEMENT STUDIES AND COMPUTER APPLICATION</p>
    </div>
</section>
    <div class="container">
        <div class="board-section">
            <h2>Editor –in - Chief</h2>
            <div class="member-card">
                <div class="member-name">Dr. Abhishek  Kumar Tripathi</div>
                <div class="member-position"> Director (BIM)</div>
            </div>
            <!-- <div class="member-card">
                <div class="member-name">Mr. Ankur Kumar</div>
                <div class="member-position">Assistant Professor, Civil Engineering</div>
            </div> -->
        </div>

        <div class="board-section">
            <h2>Editor</h2>
            <div class="member-card">
                <div class="member-name">Professor A. K. Tiwari</div>
                <div class="member-position">Professor, BIM</div>
            </div>
        </div>

        <div class="board-section">
            <h2>Co-editors</h2>
            <div class="member-card">
                <div class="member-name">Dr. Rama Raman Pandey</div>
                <div class="member-position">HoD, BBA</div>
            </div>
            <div class="member-card">
                <div class="member-name">Mrs. Deepika Seth</div>
                <div class="member-position">HoD, MBA</div>
            </div>
            <div class="member-card">
                <div class="member-name">Mr. Arvind Singh</div>
                <div class="member-position">HoD, Computer Application</div>
            </div>
            
        </div>
        <div class="board-section">
            <h2>Editorial Board</h2>
            <div class="member-card">
                <div class="member-name">Mrs. Pinky Pandey</div>
                <div class="member-position">Assistant Professor</div>
            </div>
            <div class="member-card">
                <div class="member-name">Mr. Ashtbhuja Yadav</div>
                                <div class="member-position">Assistant Professor</div>

            </div>
            <div class="member-card">
                <div class="member-name">Mr. Sandeep Yadav</div>
                                <div class="member-position">Assistant Professor</div>

            </div>
            
        </div>
    </div>
@endsection
