<?php
// Database connection
$conn = new mysqli("103.21.58.6", "eventsdbuser", "v30jb6Y6*", "EventsBitDb", 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Fetch faculty details
$sql = "SELECT * FROM mca_faculty_details";
$result = $conn->query($sql);
?>

<h4 class="fw-bold pb-2" data-aos="fade-up" data-aos-delay="300">Faculty</h4>
<div class="row">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" class="mb-4 w-100" data-aos="fade-up" data-aos-delay="400" />
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-12 d-flex flex-column align-items-start">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div>
                        <h2 data-aos="fade-up" data-aos-delay="300" class="mb-0"><?php echo htmlspecialchars($row['name']); ?></h2>
                        <p data-aos="fade-up" data-aos-delay="400" class="mb-0"><?php echo htmlspecialchars($row['designation']); ?></p>
                    </div>
                    <a data-aos="fade-up" data-aos-delay="700" href="{{ url('departments/bca/bca_faculty_profile?id=<?php echo $row['id']; ?>') }}" class="btn btn-dark btn-sm ms-auto">Profile</a>
                </div>
                <table class="table table-bordered border-danger mt-3" data-aos="fade-up" data-aos-delay="500">
                    <thead>
                        <tr data-aos="fade-up" data-aos-delay="500">
                            <th scope="col">Qualification</th>
                            <td scope="col"><?php echo htmlspecialchars($row['phd_qualification'] ?: $row['pg_qualification']); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-aos="fade-up" data-aos-delay="600">
                            <th scope="row">Designation</th>
                            <td><?php echo htmlspecialchars($row['designation']); ?></td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-delay="700">
                            <th scope="row">Areas of Specialization</th>
                            <td><?php echo htmlspecialchars($row['department']); ?></td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-delay="800">
                            <th scope="row">Experience</th>
                            <td> <?php echo htmlspecialchars($row['experience']); ?> years
                        </td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-delay="900">
                            <th scope="row" colspan="2">URL of Google Scholar & Research Gate: 
                                <a class="text-danger text-decoration-none" href="#">Link</a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" class="mb-4 w-100" />
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-12 d-flex flex-column align-items-start">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div>
                    <h2 class="mb-0">Dr. John Doe</h2>
                    <p class="mb-0">Professor</p>
                </div>
                <a href="#" class="btn btn-dark btn-sm ms-auto">Profile</a>
            </div>
            <table class="table table-bordered border-danger mt-3">
                <thead>
                    <tr>
                        <th scope="col">Qualification</th>
                        <td scope="col">Ph.D</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Designation</th>
                        <td>Professor</td>
                    </tr>
                    <tr>
                        <th scope="row">Areas of Specialization</th>
                        <td>Computer Science</td>
                    </tr>
                    <tr>
                        <th scope="row">Experience</th>
                        <td>10 years</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2">URL of Google Scholar & Research Gate: 
                            <a class="text-danger text-decoration-none" href="#">Link</a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?php $conn->close(); ?>
