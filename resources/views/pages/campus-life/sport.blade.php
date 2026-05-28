<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports - BIM</title>
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

    @include('includes.footer')

    @include('includes.body_links')

</body>

</html>
