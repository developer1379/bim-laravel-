<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Journal - BIM</title>
    <link rel="stylesheet" href="{{ asset('../Includes/styles.css') }}">

    @include('includes.head_links')
    <link rel="icon" type="image/x-icon" href="{{ asset('../Images/logo.png') }}">

</head>

<body>

    @include('includes.navbar1')
    <div class="container-fluid" id='main-content'>

        <div class="row">
            @include('pages.uncategorized.cj-sidebar')
            <div class="col-lg-9 ms-auto p-4 overflow-hidden">

                @if (request()->has('cj-about'))
                    @include('pages.uncategorized.cj-about')
                @endif
                @if (request()->has('cj-volume-1'))
                    @include('pages.uncategorized.cj-volume-1')
                @endif
            </div>
        </div>

    </div>

    @include('includes.footer')

    @include('includes.body_links')
</body>

</html>
