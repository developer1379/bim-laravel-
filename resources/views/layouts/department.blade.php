<!doctype html>
<html lang="en">
<head>
    @php($headView = $headPartial ?? 'partials.department.head')
    @include($headView)
    @stack('head')
</head>
<body class="{{ $bodyClass ?? 'department-layout' }}">
    @php($headerView = $headerPartial ?? 'partials.department.header')
    @include($headerView)

    <main>
        @yield('content')
    </main>

    @php($footerView = $footerPartial ?? 'partials.department.footer')
    @include($footerView)

    @php($scriptsView = $scriptsPartial ?? 'partials.department.scripts')
    @include($scriptsView)
    @stack('scripts')
</body>
</html>
