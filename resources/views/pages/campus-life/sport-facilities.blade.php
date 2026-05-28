<?php
// Database connection
// include('Admin/db.php'); // TODO: Fix DB Include;

// Fetch faculty details
$sql = "SELECT * FROM mca_faculty_details";
$result = $conn->query($sql);
?>

<h4 class="fw-bold pb-2" data-aos="fade-up" data-aos-delay="300">Sport Facilities</h4>

<table class="table table-bordered aos-init" data-aos="fade-up" data-aos-delay="500">
    <thead>
        <tr class="table-secondary aos-init" data-aos="fade-up" data-aos-delay="400">
            <th scope="col">S.N</th>
            <th scope="col">Title</th>
            <th scope="col">Facebook Link</th>
        </tr>
    </thead>
    <tbody>
    <tr data-aos="fade-up" data-aos-delay="500" class="aos-init">
        <th scope="row">1</th>
        <td>Sport Facilities</td>
        <th><a href="https://www.facebook.com/share/p/1aoHywYowZ/" target="_blank" class="text-decoration-none text-danger">View</a></th>
    </tr>
    
</tbody>

</table>

<?php $conn->close(); ?>
