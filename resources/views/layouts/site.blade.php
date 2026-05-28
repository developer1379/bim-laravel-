<!doctype html>
<html lang="en">
<head>
    @php($headView = $headPartial ?? 'partials.site.head')
    @include($headView)
    @stack('head')
</head>
<body class="{{ $bodyClass ?? '' }}">
    @php($headerView = $headerPartial ?? 'partials.site.header')
    @include($headerView)

    <main>
        @yield('content')
    </main>

    @php($footerView = $footerPartial ?? 'partials.site.footer')
    @include($footerView)

    @php($scriptsView = $scriptsPartial ?? 'partials.site.scripts')
    @include($scriptsView)
    @stack('scripts')
</body>
</html>
