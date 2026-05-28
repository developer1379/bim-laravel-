<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBA - Mission & Vision</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    @include('includes.head_links')
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
</head>

<body>
    @include('includes.inner_bba')
    <div class="container">
        <div class="row">
            <h3 class="text-center my-3 text-danger" style="text-transform: uppercase;">Vision & Mission</h3>
            <div class="card shadow py-3 px-3 my-3">
                <h5 class="text-danger" style="text-transform: uppercase;">Vision</h5>
                <p class="px-4 py-2">To be an institution of academic excellence, generating and imparting knowledge
about management systems, nurture talent for promoting socially conscious and
globally relevant thought leadership.
                </p>
            </div>
            <div class="card shadow py-3 px-3 my-5">
                <h5 class="text-danger" style="text-transform: uppercase;">Mission</h5>
                <div class="px-4 py-2">
                    <p><b>M1.</b> To achieve and ensure intellectual excellence through effective teaching, latest
research and relevant co-curricular activities.</p>
                    <p><b>M2.</b> To equip the students with academic and professional skills, for developing
leadership qualities.</p>
                    
                    <p><b>M3.</b> To inculcate social and ethical values to enable learners to contribute towards
social, regional and national development.</p>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>