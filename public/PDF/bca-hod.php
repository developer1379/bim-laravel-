<?php
include 'Admin/db.php'; // Include the database connection

// Fetch the 3rd row from the table
$sql = "SELECT * FROM `bca_faculty_details` LIMIT 1 OFFSET 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<h4 class="fw-bold pb-2" data-aos="fade-up" data-aos-delay="300">Head Of Department (HOD)</h4>

<div class="row">
    <div class="col-md-3 col-lg-3 col-sm-4 col-12">
        <img src="../Images/cr.jpeg" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="400" />
    </div>
    <div class="col-md-9 col-lg-9 col-sm-8 col-12 d-flex align-items-center">
        <table class="table table-bordered" data-aos="fade-up" data-aos-delay="500">
            <thead>
                <tr data-aos="fade-up" data-aos-delay="300">
                    <th scope="col">Name of Teaching Staff</th>
                    <td scope="col"><?php echo $row['name']; ?></td>
                </tr>
            </thead>
            <tbody>
                <tr data-aos="fade-up" data-aos-delay="400">
                    <th scope="row">Designation</th>
                    <td><?php echo $row['designation']; ?></td>
                </tr>
                <tr data-aos="fade-up" data-aos-delay="500">
                    <th scope="row">Department</th>
                    <td><?php echo $row['department']; ?></td>
                </tr>
                <tr data-aos="fade-up" data-aos-delay="600">
                    <th scope="row">Experience</th>
                    <td><?php echo $row['experience']; ?> Years</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead>
        <tr data-aos="fade-up" data-aos-delay="400">
            <th scope="col">Qualifications with Class/Grade</th>
            <th scope="col">Ph.D</th>
            <th scope="col">PG</th>
            <th scope="col">UG</th>
        </tr>
    </thead>
    <tbody>
        <tr data-aos="fade-up" data-aos-delay="500">
            <th scope="row"></th>
            <th><?php echo $row['phd_qualification']; ?></th>
            <th><?php echo $row['pg_qualification']; ?></th>
            <th><?php echo $row['ug_qualification']; ?></th>
        </tr>
    </tbody>
</table>

<!-- No. of Papers Published -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3" data-aos="fade-up" data-aos-delay="400">No. of Papers Published</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3 fw-bold">National</td>
        </tr>
        <tr>
            <td><?php echo $row['national_journal_papers']; ?></td>
        </tr>

        <tr class="py-3">
            <td class="py-3 fw-bold">International</td>
        </tr>
        <tr>
            <td><?php echo $row['international_journal_papers']; ?></td>
        </tr>
    </tbody>
</table>

<!-- No. of Papers Presented in Conferences -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">Details pertaining to Ph.D</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3 fw-bold">National</td>
        </tr>
        <tr>
            <td><?php echo $row['phd_national_details']; ?></td>
        </tr>

        <tr class="py-3">
            <td class="py-3 fw-bold">International</td>
        </tr>
        <tr>
            <td><?php echo $row['phd_international_details']; ?></td>
        </tr>
    </tbody>
</table>

<!-- Books Published / Patents -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">Books published/IPRs/Patent</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3"><?php echo $row['patents']; ?></td>
        </tr>
    </tbody>
</table>

<!-- Professional Memberships -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">Professional Memberships</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3"><?php echo $row['memberships']; ?></td>
        </tr>
    </tbody>
</table>

<!-- Consultancy Activities -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">Consultancy Activities</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3"><?php echo $row['consultancy']; ?></td>
        </tr>
    </tbody>
</table>

<!-- Awards -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">Awards</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3"><?php echo $row['awards']; ?></td>
        </tr>
    </tbody>
</table>

<!-- Research Grants -->
<table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
    <thead class="table-secondary">
        <tr>
            <th class="text-dark py-3">Research Grants Fetched</th>
        </tr>
    </thead>
    <tbody>
        <tr class="py-3">
            <td class="py-3"><?php echo $row['research_grants']; ?></td>
        </tr>
    </tbody>
</table>

<?php
} else {
    echo "<p>No data found.</p>";
}

$conn->close();
?>
