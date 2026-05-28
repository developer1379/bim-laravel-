<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Journal - BIM</title>
    <link rel="stylesheet" href="{{ asset('Includes/styles.css') }}">

    @include('includes.head_links')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

</head>

<body>

    <?php 
    
    echo view('includes.navbar1'); 
    
    ?>
    <div class="container-fluid" id='main-content'>

        <div class="row">
            <?php echo view('pages.uncategorized.cj-sidebar');; ?>
            <div class="col-lg-9 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['cj-about'])) {
                    echo view('pages.uncategorized.cj-about');;
                }
                if (isset($_GET['cj-volume-1'])) {
                    echo view('pages.uncategorized.cj-volume-1');;
                }
                /*if (isset($_GET['bba-pos'])) {
                    echo view('pages.departments.bba.bba-pos');;
                }
                if (isset($_GET['bba-hod'])) {
                    echo view('pages.departments.bba.bba-hod');;
                }
                if (isset($_GET['bba-faculty'])) {
                    echo view('pages.departments.bba.bba-faculty');;
                }
                if (isset($_GET['bba-syllabus'])) {
                    echo view('pages.departments.bba.bba-syllabus');;
                }
                if (isset($_GET['bba-newsletter'])) {
                    include('bba-newsletter.php');
                }
                if (isset($_GET['bba-achievements'])) {
                    include('bba-achievements.php');
                }
                if (isset($_GET['bba-departmental-achievements'])) {
                    include('bba-departmental-achievements.php');
                }
                if (isset($_GET['bba-departmental-society'])) {
                    echo view('pages.departments.bba.bba-departmental-society');;
                }
                if (isset($_GET['bba-departmental-activities'])) {
                    include('bba-departmental-activities.php');
                }
                if (isset($_GET['bba-society-pinnacle'])) {
                    include('bba-society-pinnacle.php');
                }
                if (isset($_GET['bba-industry-interaction'])) {
                    include('bba-industry-interaction.php');
                }
                if (isset($_GET['bba-labs'])) {
                    include('bba-labs.php');
                }
                if (isset($_GET['bba-placements'])) {
                    include('bba-placements.php');
                }
                
                if (isset($_GET['bba-student-achievements'])) {
                    include('bba-student-achievements.php');
                }
                if (isset($_GET['bba-student-activities'])) {
                    include('bba-student-activities.php');
                }*/
                ?>
            </div>
        </div>

    </div>

    @include('includes.footer')

    @include('includes.body_links')
</body>

</html>
