<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIM</title>
    <link rel="stylesheet" href="{{ asset('../../Includes/styles.css') }}">
   
    @include('includes.head_links')
    <link rel="icon" type="image/x-icon" href="{{ asset('../../Images/logo.png') }}">

</head>

<body>

    <?php 
    
    echo view('includes.navbar1'); 
    
    ?>
    <div class="container-fluid" id='main-content'>

        <div class="row">
            <?php echo view('pages.campus-life.hostel-sidebar');; ?>
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['new-hostlers-orientation-program'])) {
                    include('new-hostlers-orientation-program.php');
                }
                if (isset($_GET['hostel-eda'])) {
                    include('hostel-eda.php');
                }
               /* if (isset($_GET['bca-dyuti'])) {
                    include('bca-dyuti.php');
                }
                if (isset($_GET['bca-dandiya'])) {
                    include('bca-dandiya.php');
                }
                if (isset($_GET['bca-annual-faction'])) {
                    include('bca-annual-faction.php');
                }
                if (isset($_GET['bca-dj-night '])) {
                    include('bca-dj-night .php');
                }
                if (isset($_GET['bca-events '])) {
                    include('bca-events.php');
                }
                if (isset($_GET['bca-achievements'])) {
                    echo view('pages.departments.bca.bca-achievements');;
                }
                /*if (isset($_GET['bca-achievements'])) {
                    echo view('pages.departments.bca.bca-achievements');;
                }
                if (isset($_GET['bca-departmental-achievements'])) {
                    echo view('pages.departments.bca.bca-departmental-achievements');;
                }
                if (isset($_GET['bca-departmental-society'])) {
                    echo view('pages.departments.bca.bca-departmental-society');;
                }
                if (isset($_GET['bca-departmental-activities'])) {
                    echo view('pages.departments.bca.bca-departmental-activities');;
                }
                if (isset($_GET['bca-society-pinnacle'])) {
                    echo view('pages.departments.bca.bca-society-pinnacle');;
                }
                if (isset($_GET['bca-industry-interaction'])) {
                    echo view('pages.departments.bca.bca-industry-interaction');;
                }
                if (isset($_GET['bca-labs'])) {
                    echo view('pages.departments.bca.bca-labs');;
                }
                if (isset($_GET['bca-placements'])) {
                    echo view('pages.departments.bca.bca-placements');;
                }
                
                if (isset($_GET['bca-student-achievements'])) {
                    echo view('pages.departments.bca.bca-student-achievements');;
                }
                if (isset($_GET['bca-student-activities'])) {
                    echo view('pages.departments.bca.bca-student-activities');;
                }*/
                ?>
            </div>
        </div>

    </div>

    @include('includes.footer')

    @include('includes.body_links')
</body>

</html>
