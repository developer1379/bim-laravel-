<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CA Video - BCA & MCA</title>
    <link href="../Includes/styles.css" rel="stylesheet" />
    
    <link rel="icon" type="image/x-icon" href="../Images/logo.png">
    <?php include '../Includes/head_links.php' ?>
    <style>
        /* Style for the PDF container with background color */
        .pdf-container {
            background-color: #ffffff; /* Blue background */
            padding: 20px; /* Optional padding */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive styling for the embedded PDF */
        .pdf-container embed {
            width: 100%;
            max-width: 800px; /* Maximum width for larger screens */
            height: 90vh; /* Height adapts to viewport */
        }

        /* Adjust padding and container width for smaller screens */
        @media (max-width: 768px) {
            .pdf-container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <?php include '../Includes/inner_bca.php' ?>
    <!-- Carousel Start -->


    <div class="pdf-container">
        <video width="50%" height="50%" controls>
            <source src="../Images/ca_video.mp4" type="video/mp4">
            <source src="../Images/ca_video.ogg" type="video/ogg">
  
         </video>
    </div>


    <?php include '../Includes/footer.php' ?>
    <?php include '../Includes/body_links.php' ?>
</body>

</html>