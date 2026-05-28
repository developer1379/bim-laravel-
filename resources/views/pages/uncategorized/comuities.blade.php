<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communities - BIM</title>
    <link rel="stylesheet" href="{{ asset('Includes/styles.css') }}">
   
    @include('includes.head_links')
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">

</head>

<body>

    <?php 
    
    echo view('includes.navbar1'); 
    
    ?>

      <div class="row">
           <div class="md-12">
               
                

                
           </div>

       </div>
    <div class="container-fluid" id='main-content'>
      
        <div class="row">
          

            <?php echo view('pages.uncategorized.bim-com-sidebar');; ?>
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <?php
                if (isset($_GET['about-punya'])) {
                    echo view('pages.about.about-punya');;
                }
                if (isset($_GET['nss'])) {
                    echo view('pages.clubs.nss');;
                }
                if (isset($_GET['activities'])) {
                    echo view('pages.uncategorized.activities');;
                }
                if (isset($_GET['tech-genesis'])) {
                    echo view('pages.events.tech-genesis');;
                }
                if (isset($_GET['buddha-samanya-gyan-prati-yogita'])) {
                    echo view('pages.events.buddha-samanya-gyan-prati-yogita');;
                }
                if (isset($_GET['buddha-career-conclave'])) {
                    echo view('pages.events.buddha-career-conclave');;
                }
                if (isset($_GET['topper-of-the-toppers'])) {
                    echo view('pages.students_alumni.topper-of-the-toppers');;
                }
                if (isset($_GET['tree-plantation'])) {
                    echo view('pages.events.tree-plantation');;
                }
                if (isset($_GET['blood-donation'])) {
                    echo view('pages.events.blood-donation');;
                }
                if (isset($_GET['medical-camps'])) {
                    echo view('pages.events.medical-camps');;
                }
                if (isset($_GET['village-activities'])) {
                    echo view('pages.events.village-activities');;
                }
               /* if (isset($_GET['bca-departmental-society'])) {
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
