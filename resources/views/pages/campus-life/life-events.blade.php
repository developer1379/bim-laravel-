<?php echo view('pages.uncategorized.header'); ?>
<style>
        
        .event-section {
            text-align: center;
            padding: 40px 0;
        }
        .event-title {
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .event-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .event-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 5px;
        }
        .large-event {
            position: relative;
        }
    </style>
</head>
    <div class="container event-section">
        <h2 class="event-title">Upcoming/Recent Events</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="large-event position-relative">
                    <img src="{{ asset('slider/slide1.png') }}" alt="Faculty Orientation" class="img-fluid">
                    <div class="event-text">FACULTY ORIENTATION PROGRAMS 2024-25</div>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column">
                <div class="event-card position-relative mb-3">
                    <img src="{{ asset('slider/image.png') }}" alt="Event 1">
                    <div class="event-text">SPECIAL INTERVIEW CONDUCTED</div>
                </div>
                <div class="event-card position-relative mb-3">
                    <img src="{{ asset('slider/slide1.png') }}" alt="Event 2">
                    <div class="event-text">NUCLEAR POWER TALK</div>
                </div>
                
            </div>
        </div>
    </div>

    
@include('includes.footer')
</body>
</html>
