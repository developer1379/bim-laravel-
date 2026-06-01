@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'pages.campus-life.sport-sidebar',
    'footerPartial' => 'pages.campus-life.sport-sidebar',
    'scriptsPartial' => 'pages.campus-life.sport-sidebar',
])

@section('content')
<?php 
    
    echo view('includes.navbar1'); 
    
    ?>
    <div class="container-fluid" id='main-content'>

        <div class="row">
            <?php echo view('pages.campus-life.sport-sidebar');; ?>
            <div class="col-lg-9 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['sport-committee'])) {
                    echo view('pages.campus-life.sport-committee');;
                }
                if (isset($_GET['sport-spardha'])) {
                    echo view('pages.campus-life.sport-spardha');;
                }
                if (isset($_GET['sport-events'])) {
                    echo view('pages.campus-life.sport-events');;
                }
                if (isset($_GET['sport-achievement'])) {
                    echo view('pages.campus-life.sport-achievement');;
                }
                if (isset($_GET['sport-clubs'])) {
                    echo view('pages.campus-life.sport-clubs');;
                }
                if (isset($_GET['sport-facilities'])) {
                    echo view('pages.campus-life.sport-facilities');;
                }
                if (isset($_GET['staff-annual-sports'])) {
                    echo view('pages.events.staff-annual-sports');;
                }
                
                ?>
            </div>
        </div>

    </div>
@endsection
