@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'pages.campus-life.extracuricular-sidebar',
    'footerPartial' => 'pages.campus-life.extracuricular-sidebar',
    'scriptsPartial' => 'pages.campus-life.extracuricular-sidebar',
])

@section('content')
<?php 
    
    echo view('includes.navbar1'); 
    
    ?>
    <div class="container-fluid" id='main-content'>

        <div class="row">
            <?php echo view('pages.campus-life.extracuricular-sidebar');; ?>
            <div class="col-lg-9 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['extracuricular-deca'])) {
                    echo view('pages.campus-life.extracuricular-deca');;
                }
                if (isset($_GET['extracuricular-dyuti'])) {
                    echo view('pages.campus-life.extracuricular-dyuti');;
                }
                if (isset($_GET['extracuricular-dandiya-night'])) {
                    echo view('pages.campus-life.extracuricular-dandiya-night');;
                }
                if (isset($_GET['extracuricular-annual-faction'])) {
                    echo view('pages.campus-life.extracuricular-annual-faction');;
                }
                if (isset($_GET['extracuricular-dj-night'])) {
                    echo view('pages.campus-life.extracuricular-dj-night');;
                }
                if (isset($_GET['extracuricular-events'])) {
                    echo view('pages.campus-life.extracuricular-events');;
                }
                if (isset($_GET['extracuricular-achievements'])) {
                    echo view('pages.campus-life.extracuricular-achievements');;
                }
              /*  if (isset($_GET['mba-achievements'])) {
                    echo view('pages.departments.mba.mba-achievements');;
                }
                if (isset($_GET['mba-departmental-achievements'])) {
                    echo view('pages.departments.mba.mba-departmental-achievements');;
                }
                if (isset($_GET['mba-departmental-society'])) {
                    echo view('pages.departments.mba.mba-departmental-society');;
                }
                if (isset($_GET['mba-departmental-activities'])) {
                    echo view('pages.departments.mba.mba-departmental-activities');;
                }
                if (isset($_GET['mba-society-pinnacle'])) {
                    echo view('pages.departments.mba.mba-society-pinnacle');;
                }
                if (isset($_GET['mba-industry-interaction'])) {
                    echo view('pages.departments.mba.mba-industry-interaction');;
                }
                if (isset($_GET['mba-labs'])) {
                    echo view('pages.departments.mba.mba-labs');;
                }
                if (isset($_GET['mba-placements'])) {
                    echo view('pages.departments.mba.mba-placements');;
                }
                
                if (isset($_GET['mba-student-achievements'])) {
                    echo view('pages.departments.mba.mba-student-achievements');;
                }
                if (isset($_GET['mba-student-activities'])) {
                    echo view('pages.departments.mba.mba-student-activities');;
                }*/
                ?>
            </div>
        </div>

    </div>
@endsection
