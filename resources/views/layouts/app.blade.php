<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- ================================================================
         BASIC DOCUMENT META
    ================================================================= --}}

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <meta
        name="author"
        content="Techcrossbreed"
    >

    <meta
        name="application-name"
        content="Techcrossbreed"
    >

    <meta
        name="theme-color"
        content="#17121b"
    >


    {{-- ================================================================
         SEO — TITLE
    ================================================================= --}}

    <title>
        @yield(
            'title',
            'Techcrossbreed | Website Development, Software & Digital Solutions'
        )
    </title>


    {{-- ================================================================
         SEO — META DESCRIPTION
    ================================================================= --}}

    <meta
        name="description"
        content="@yield(
            'meta_description',
            'Techcrossbreed provides professional website development, custom software, SEO, UI/UX design, data analytics and digital transformation solutions for businesses.'
        )"
    >


    {{-- ================================================================
         SEO — ROBOTS
    ================================================================= --}}

    <meta
        name="robots"
        content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')"
    >


    {{-- ================================================================
         CANONICAL URL
    ================================================================= --}}

    <link
        rel="canonical"
        href="@yield('canonical', url()->current())"
    >


    {{-- ================================================================
         FAVICON & APP ICONS
    ================================================================= --}}

    <link
        rel="icon"
        type="image/x-icon"
        sizes="32x32"
        href="{{ asset('images/favicon/techcrossbreed-favicon.ico') }}"
    >

    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('images/favicon/favicon-16x16.png') }}"
    >

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('images/favicon/favicon-32x32.png') }}"
    >

    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('images/favicon/android-chrome-192x192.png') }}"
    >


    {{-- ================================================================
         OPEN GRAPH / FACEBOOK / LINK SHARING
    ================================================================= --}}

    <meta
        property="og:locale"
        content="{{ str_replace('_', '-', app()->getLocale()) }}"
    >

    <meta
        property="og:type"
        content="@yield('og_type', 'website')"
    >

    <meta
        property="og:title"
        content="@yield(
            'og_title',
            'Techcrossbreed | Website Development, Software & Digital Solutions'
        )"
    >

    <meta
        property="og:description"
        content="@yield(
            'og_description',
            'Professional websites, custom software, SEO, UI/UX, data analytics and digital transformation solutions for businesses.'
        )"
    >

    <meta
        property="og:url"
        content="@yield('og_url', url()->current())"
    >

    <meta
        property="og:site_name"
        content="Techcrossbreed"
    >

    <meta
        property="og:image"
        content="@yield('og_image', asset('images/og-image.png'))"
    >

    <meta
        property="og:image:alt"
        content="@yield(
            'og_image_alt',
            'Techcrossbreed — Digital Solutions for Growing Businesses'
        )"
    >

    <meta
        property="og:image:type"
        content="image/png"
    >


    {{-- ================================================================
         TWITTER / X
    ================================================================= --}}

    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="@yield(
            'twitter_title',
            'Techcrossbreed | Website Development, Software & Digital Solutions'
        )"
    >

    <meta
        name="twitter:description"
        content="@yield(
            'twitter_description',
            'Professional websites, custom software, SEO, UI/UX, data analytics and digital transformation solutions for businesses.'
        )"
    >

    <meta
        name="twitter:image"
        content="@yield(
            'twitter_image',
            asset('images/og-image.png')
        )"
    >

    <meta
        name="twitter:image:alt"
        content="@yield(
            'twitter_image_alt',
            'Techcrossbreed digital solutions'
        )"
    >


    {{-- ================================================================
         FONT PERFORMANCE
    ================================================================= --}}

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    {{-- ================================================================
         VITE
    ================================================================= --}}

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


    {{-- ================================================================
         PAGE-SPECIFIC HEAD CONTENT
         
         Used later for:
         - JSON-LD
         - Breadcrumb schema
         - Article schema
         - Service schema
         - Additional page-specific metadata
    ================================================================= --}}

    @stack('head')

</head>


<body class="bg-white text-brand-dark antialiased">

    {{-- ================================================================
         HEADER
    ================================================================= --}}

    @include('partials.header')


    {{-- ================================================================
         MAIN CONTENT
    ================================================================= --}}

    <main id="main-content">

        @yield('content')

    </main>


    {{-- ================================================================
         FOOTER
    ================================================================= --}}

    @include('partials.footer')


    {{-- ================================================================
         PAGE-SPECIFIC SCRIPTS
    ================================================================= --}}

    @stack('scripts')

</body>

</html>