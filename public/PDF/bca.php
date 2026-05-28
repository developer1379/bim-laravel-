<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA - BIM</title>
    <link rel="stylesheet" href="../Includes/styles.css">
   
    <?php include '../Includes/head_links.php' ?>
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">

</head>

<body>

    <?php 
    
    include('Includes/Navbar.php') 
    
    ?>
    <div class="container-fluid" id='main-content'>

        <div class="row">
            <?php include 'bca-sidebar.php'; ?>
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['bca-vision-mission'])) {
                    include('bca-vision-mission.php');
                }
                if (isset($_GET['bca-peo'])) {
                    include('bca-peo.php');
                }
                if (isset($_GET['bca-pso'])) {
                    include('bca-pso.php');
                }
                if (isset($_GET['bca-pos'])) {
                    include('bca-pos.php');
                }
                if (isset($_GET['bca-hod'])) {
                    include('bca-hod.php');
                }
                if (isset($_GET['bca-faculty'])) {
                    include('bca-faculty.php');
                }
                if (isset($_GET['bca-syllabus'])) {
                    include('bca-syllabus.php');
                }
                if (isset($_GET['bca-newsletter'])) {
                    include('bca-newsletter.php');
                }
                if (isset($_GET['bca-achievements'])) {
                    include('bca-achievements.php');
                }
                if (isset($_GET['bca-departmental-achievements'])) {
                    include('bca-departmental-achievements.php');
                }
                if (isset($_GET['bca-departmental-society'])) {
                    include('bca-departmental-society.php');
                }
                if (isset($_GET['bca-departmental-activities'])) {
                    include('bca-departmental-activities.php');
                }
                if (isset($_GET['bca-society-pinnacle'])) {
                    include('bca-society-pinnacle.php');
                }
                if (isset($_GET['bca-industry-interaction'])) {
                    include('bca-industry-interaction.php');
                }
                if (isset($_GET['bca-labs'])) {
                    include('bca-labs.php');
                }
                if (isset($_GET['bca-placements'])) {
                    include('bca-placements.php');
                }
                
                if (isset($_GET['bca-student-achievements'])) {
                    include('bca-student-achievements.php');
                }
                if (isset($_GET['bca-student-activities'])) {
                    include('bca-student-activities.php');
                }
                ?>
            </div>
        </div>

    </div>

    <?php include('includes/footer.php') ?>

    <?php include '../Includes/body_links.php' ?>
</body>

</html>