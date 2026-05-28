<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AICTE EOA 2024-2025 - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
    <style>
        /* Style for the logo container with background color */
        .logo-container {
            background-color: #ffffff; /* White background */
            padding: 20px; /* Optional padding */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive styling for the embedded logo */
        .logo-container img {
            width: 100%;
            max-width: 800px; /* Maximum width for larger screens */
            height: auto; /* Keeps the aspect ratio of the image */
        }

        /* Adjust padding and container width for smaller screens */
        @media (max-width: 768px) {
            .logo-container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    @include('includes.navbar')

    <div class="logo-container">
        <img src="{{ asset('Images/logo.png') }}" alt="Logo Image" />
    </div>

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>
