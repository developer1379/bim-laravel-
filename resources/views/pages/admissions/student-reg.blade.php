@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
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
@endpush

@section('content')
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
@endsection
