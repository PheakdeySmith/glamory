<!DOCTYPE html>
<html data-wf-domain="glamory.webflow.io" data-wf-page="676e89008f680432324f130f"
    data-wf-site="676e89008f680432324f130e" lang="en" data-wf-locale="en" class=" w-mod-js w-mod-ix">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <title>Glamory</title>
    <meta
        content="Glamory is a modern site for the beauty industry. With its sophisticated animations, clean design and minimalist aesthetic."
        name="description">
    <meta content="Glamory" property="og:title">
    <meta
        content="Glamory is a modern site for the beauty industry. With its sophisticated animations, clean design and minimalist aesthetic."
        property="og:description">
    <meta
        content="https://cdn.prod.website-files.com/676e89008f680432324f130e/6782b72290d93108bf9c224a_open-graph-image.jpg"
        property="og:image">
    <meta content="Glamory" property="twitter:title">
    <meta
        content="Glamory is a modern site for the beauty industry. With its sophisticated animations, clean design and minimalist aesthetic."
        property="twitter:description">
    <meta
        content="https://cdn.prod.website-files.com/676e89008f680432324f130e/6782b72290d93108bf9c224a_open-graph-image.jpg"
        property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('front/assets') }}/css/glamory.css" rel="stylesheet" type="text/css">
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="https://cdn.prod.website-files.com/676e89008f680432324f130e/67813214b723437c08037db0_favicon.svg"
        rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.prod.website-files.com/676e89008f680432324f130e/678131e5adaf2839969da844_webclip.svg"
        rel="apple-touch-icon">
</head>

<body>
    <div class="page-wrapper">

        @include('frontend.partials.navbar')

        @yield('content')

        @include('frontend.partials.footer')

    </div>

    <script src="{{ asset('front/assets') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('front/assets') }}/js/webflow.js"></script>
    @stack('scripts')
</body>

</html>
