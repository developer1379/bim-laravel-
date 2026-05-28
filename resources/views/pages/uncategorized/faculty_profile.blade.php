<?php
// include('Admin/db.php'); // TODO: Fix DB Include;

// Get faculty ID from URL
if (isset($_GET['id'])) {
    $faculty_id = intval($_GET['id']);

    // Fetch faculty details
    $sql = "SELECT * FROM `mba_faculty_details` WHERE id = $faculty_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>No data found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid request.</p>";
    exit;
}

$conn->close();
?>

<h4 class="fw-bold pb-2">Head Of Department (HOD)</h4>

<div class="row">
    <div class="col-md-3 col-lg-3 col-sm-4 col-12">
        <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" class="mb-4 w-100" />
    </div>
    <div class="col-md-9 col-lg-9 col-sm-8 col-12 d-flex align-items-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name of Teaching Staff</th>
                    <td><?php echo $row['name']; ?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Designation</th>
                    <td><?php echo $row['designation']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Department</th>
                    <td><?php echo $row['department']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Additional Profile Details -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Qualifications with Class/Grade</th>
            <th scope="col">Ph.D</th>
            <th scope="col">PG</th>
            <th scope="col">UG</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"></th>
            <td><?php echo $row['phd_qualification']; ?></td>
            <td><?php echo $row['pg_qualification']; ?></td>
            <td><?php echo $row['ug_qualification']; ?></td>
        </tr>
    </tbody>
</table>

<!-- Publications & Achievements -->
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">No. of Papers Published</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>National: <?php echo $row['national_journal_papers']; ?></td>
        </tr>
        <tr>
            <td>International: <?php echo $row['international_journal_papers']; ?></td>
        </tr>
    </tbody>
</table>
