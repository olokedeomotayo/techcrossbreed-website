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

{{-- ================================================================
     FLOATING WHATSAPP BUTTON
================================================================= --}}
<a
    href="https://wa.me/2348120081213?text={{ urlencode('Hello Techcrossbreed, I would like to make an enquiry about your services.') }}"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat with Techcrossbreed on WhatsApp"
    class="fixed bottom-6 left-6 z-[9999] flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg shadow-black/15 transition duration-300 hover:-translate-y-1 hover:scale-105"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="h-7 w-7"
        aria-hidden="true"
    >
        <path
            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.206-.242-.579-.487-.5-.67-.51-.173-.007-.372-.009-.57-.009-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.848 1.213 3.047.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982 1-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.437-9.884 9.893-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.438 9.884-9.892 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.89a11.83 11.83 0 001.58 5.945L0 24l6.335-1.662a11.882 11.882 0 005.71 1.453h.005c6.554 0 11.89-5.335 11.893-11.89a11.815 11.815 0 00-3.479-8.413"
        />
    </svg>
</a>


{{-- ================================================================
     BACK TO TOP BUTTON
================================================================= --}}
<button
    id="back-to-top"
    type="button"
    aria-label="Back to top"
    class="fixed bottom-6 right-6 z-[9999] flex h-14 w-14 translate-y-3 items-center justify-center rounded-full bg-brand-purple text-white opacity-0 shadow-lg shadow-black/15 pointer-events-none transition-all duration-300 hover:-translate-y-1 hover:scale-105"
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="2"
        stroke="currentColor"
        class="h-6 w-6"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M5 15l7-7 7 7"
        />
    </svg>
</button>


<script>
    const backToTop = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            backToTop.classList.remove(
                'opacity-0',
                'translate-y-3',
                'pointer-events-none'
            );

            backToTop.classList.add(
                'opacity-100',
                'translate-y-0'
            );
        } else {
            backToTop.classList.add(
                'opacity-0',
                'translate-y-3',
                'pointer-events-none'
            );

            backToTop.classList.remove(
                'opacity-100',
                'translate-y-0'
            );
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

<script>
    function orderViaWhatsApp(packageName, price = '') {
        const phone = '2348120081213';

        let message = `Hello Techcrossbreed, I'm interested in the ${packageName} package`;

        if (price) {
            message += ` starting from ${price}`;
        }

        message += `. I'd like to discuss my project.`;

        const whatsappUrl =
            `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

        window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
    }
</script>

</html>