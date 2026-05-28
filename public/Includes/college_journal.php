<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Journal - BIM</title>
    <link rel="stylesheet" href="/bim/../Includes/styles.css">

    <?php include '../Includes/head_links.php' ?>
    <link rel="icon" type="image/x-icon" href="/bim/../Images/logo.png">

</head>

<body>

    <?php 
    
    include('Includes/Navbar1.php') 
    
    ?>
    <div class="container-fluid" id='main-content'>

        <div class="row">
            <?php include 'cj-sidebar.php'; ?>
            <div class="col-lg-9 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['cj-about'])) {
                    include('cj-about.php');
                }
                if (isset($_GET['cj-volume-1'])) {
                    include('cj-volume-1.php');
                }
                /*if (isset($_GET['bba-pos'])) {
                    include('bba-pos.php');
                }
                if (isset($_GET['bba-hod'])) {
                    include('bba-hod.php');
                }
                if (isset($_GET['bba-faculty'])) {
                    include('bba-faculty.php');
                }
                if (isset($_GET['bba-syllabus'])) {
                    include('bba-syllabus.php');
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
                    include('bba-departmental-society.php');
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

    <?php include('includes/footer.php') ?>

    <?php include '../Includes/body_links.php' ?>
</body>

</html>