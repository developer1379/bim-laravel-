<?php
// include('Admin/db.php'); // TODO: Fix DB Include;
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $department = htmlspecialchars(trim($_POST["department"]));
    $course = htmlspecialchars(trim($_POST["course"]));
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {
        $message = "<div class='alert alert-danger'>❌ Passwords do not match!</div>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $conn = new mysqli("localhost", "root", "", "college_portal");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO students (name, email, department, course, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $email, $department, $course, $hashed_password);

        if ($stmt->execute()) {
            $message = "<div class='alert alert-success'>✅ Registration successful!</div>";
        } else {
            $message = "<div class='alert alert-danger'>❌ Error: " . $conn->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Registration</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .registration-box {
            max-width: 500px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <?php echo view('includes.navbar'); ?>

    <div class="container">
        <div class="registration-box">
            <h2 class="fw-bold pb-3">Student Registration</h2>

            <?php if (!empty($message)) echo $message; ?>

            <form method="POST" action="">
                <div class="form-group mb-4">
                    <input type="text" class="form-control border-0 rounded" name="name" placeholder="Full Name" style="height: 50px; box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.4);" required>
                </div>

                <div class="form-group mb-4">
                    <input type="email" class="form-control border-0 rounded" name="email" placeholder="Email Address" style="height: 50px; box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.4);" required>
                </div>

                <div class="form-group mb-4">
                    <select name="department" class="form-control border-0 rounded" style="height: 50px; box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.4);" required>
                        <option value="">Select Department</option>
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="ME">ME</option>
                        <option value="CE">CE</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class="form-control border-0 rounded" name="course" placeholder="Course" style="height: 50px; box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.4);" required>
                </div>

                <div class="form-group mb-4">
                    <input type="password" class="form-control border-0 rounded" name="password" placeholder="Password" style="height: 50px; box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.4);" required>
                </div>

                <div class="form-group mb-4">
                    <input type="password" class="form-control border-0 rounded" name="confirm_password" placeholder="Confirm Password" style="height: 50px; box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.4);" required>
                </div>

                <button type="submit" class="btn btn-danger w-100">Register</button>
            </form>


        </div>
    </div>
    @include('includes.footer')
    <?php echo view('includes.body_links'); ?>
</body>

</html>
