@extends('layouts.app')

@section('title', 'Website Development Services for Businesses | Techcrossbreed')

@section(
    'meta_description',
    'Get a professional, responsive and SEO-friendly business website built by Techcrossbreed to strengthen your online presence, attract customers and support business growth.'
)

@section('canonical', url('/services/website-development'))

@section(
    'og_title',
    'Website Development Services for Businesses | Techcrossbreed'
)

@section(
    'og_description',
    'Techcrossbreed designs and develops professional, responsive and SEO-friendly websites built around your business goals and customers.'
)

@section('og_url', url('/services/website-development'))

@section(
    'og_image_alt',
    'Techcrossbreed website development services'
)

@section(
    'twitter_title',
    'Website Development Services for Businesses | Techcrossbreed'
)

@section(
    'twitter_description',
    'Professional, responsive and SEO-friendly websites designed to help businesses build credibility and grow online.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="website-development-heading"
    >

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand-purple/25 blur-[130px]"
        ></div>

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -left-40 bottom-0 h-[420px] w-[420px] rounded-full bg-brand-red/15 blur-[120px]"
        ></div>

        <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">

                <div>

                    <div class="mb-6 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            Website Development
                        </span>

                    </div>

                    <h1
                        id="website-development-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Websites that work as hard as your business.
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        We design and develop professional, responsive and
                        SEO-friendly websites that help businesses build
                        credibility, reach customers and achieve their goals.
                    </p>

                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="{{ url('/contact') }}"
                            class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                        >
                            Start Your Website

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-4 w-4 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                />
                            </svg>

                        </a>

                        <a
                            href="#website-features"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore Our Approach
                        </a>

                    </div>

                </div>


                {{-- Hero visual --}}
                <div class="relative">

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="overflow-hidden rounded-[26px] border border-white/10 bg-[#211a25]">

                            <div class="flex items-center justify-between border-b border-white/10 px-5 py-4">

                                <div class="flex gap-1.5">

                                    <span class="h-2.5 w-2.5 rounded-full bg-white/15"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-white/15"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-white/15"></span>

                                </div>

                                <div class="h-2 w-24 rounded-full bg-white/10"></div>

                            </div>


                            <div class="p-6 sm:p-8">

                                <div class="h-3 w-24 rounded-full bg-brand-purple/70"></div>

                                <div class="mt-5 h-10 w-4/5 rounded-xl bg-white/10"></div>

                                <div class="mt-3 h-2.5 w-3/5 rounded-full bg-white/10"></div>

                                <div class="mt-7 flex gap-3">

                                    <div class="h-11 w-28 rounded-full bg-brand-purple/50"></div>

                                    <div class="h-11 w-24 rounded-full bg-white/5"></div>

                                </div>

                                <div class="mt-8 grid grid-cols-3 gap-3">

                                    <div class="h-24 rounded-xl bg-white/5"></div>
                                    <div class="h-24 rounded-xl bg-brand-purple/10"></div>
                                    <div class="h-24 rounded-xl bg-brand-red/10"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         INTRODUCTION
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="website-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            More Than a Website
                        </span>

                    </div>

                    <h2
                        id="website-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Your website is part of your business.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        A business website should do more than display your
                        company information. It should communicate your value,
                        build trust, make it easy for customers to take action
                        and support your wider business goals.
                    </p>

                    <p>
                        We approach website development from both a business
                        and technology perspective, combining strategy,
                        user experience, design, development, performance
                        and search engine optimization.
                    </p>

                    <p>
                        The result is a digital presence designed to represent
                        your business professionally and provide a strong
                        foundation for future growth.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         TYPES OF WEBSITES
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-brand-light"
        aria-labelledby="website-types-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        What We Build
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>

                <h2
                    id="website-types-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
                >
                    Websites built for different business needs.
                </h2>

                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    We adapt the structure, features and technology to the
                    purpose of your website.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">


                <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                    <span class="text-xs font-black text-brand-purple">
                        01
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-brand-dark">
                        Business Websites
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-brand-gray">
                        Professional websites that clearly communicate your
                        business, services, expertise and value proposition.
                    </p>

                </article>


                <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                    <span class="text-xs font-black text-brand-red">
                        02
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-brand-dark">
                        Corporate Websites
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-brand-gray">
                        Structured digital platforms for organizations that
                        need a stronger corporate presence and information
                        architecture.
                    </p>

                </article>


                <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                    <span class="text-xs font-black text-brand-purple">
                        03
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-brand-dark">
                        Service Websites
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-brand-gray">
                        Conversion-focused websites that present your services
                        clearly and guide potential customers toward action.
                    </p>

                </article>


                <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                    <span class="text-xs font-black text-brand-red">
                        04
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-brand-dark">
                        Organization Websites
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-brand-gray">
                        Information-rich websites for agencies, institutions,
                        associations and other organizations.
                    </p>

                </article>


                <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                    <span class="text-xs font-black text-brand-purple">
                        05
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-brand-dark">
                        Landing Pages
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-brand-gray">
                        Focused landing pages designed around specific
                        campaigns, services, products or conversion goals.
                    </p>

                </article>


                <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                    <span class="text-xs font-black text-brand-red">
                        06
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-brand-dark">
                        Web Platforms
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-brand-gray">
                        More advanced web experiences that connect users,
                        information, workflows and business processes.
                    </p>

                </article>

            </div>

        </div>

    </section>

    {{-- ================================================================
     WEBSITE DEVELOPMENT PRICING
================================================================= --}}
<section
    id="website-pricing"
    class="relative overflow-hidden bg-white"
    aria-labelledby="website-pricing-heading"
>

    <div class="mx-auto max-w-[1200px] px-6 py-14 sm:px-8 lg:px-10 lg:py-18">

        {{-- Section Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                    Website Packages
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>

            <h2
                id="website-pricing-heading"
                class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Website packages built for your business.
            </h2>

            <p class="mx-auto mt-3 max-w-2xl text-sm leading-6 text-brand-gray sm:text-base">
                Choose a package that fits your current needs, or talk to us
                about a custom solution.
            </p>

            {{-- Included --}}
            <div class="mt-4 flex justify-center">

                <span class="inline-flex items-center gap-2 rounded-full bg-brand-purple-light px-4 py-2 text-xs font-bold text-brand-purple">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 13l4 4L19 7"
                        />
                    </svg>

                    Domain & Hosting Included

                </span>

            </div>

        </div>


        {{-- Pricing Cards --}}
        <div class="mt-9 grid gap-5 md:grid-cols-3">


            {{-- =========================================================
                 STARTER
            ========================================================== --}}
            <article
                class="flex flex-col rounded-[24px] border border-gray-200 bg-brand-light p-6"
            >

                <div class="flex-1">

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-brand-purple">
                        Starter
                    </span>

                    <h3 class="mt-2 text-xl font-bold text-brand-dark">
                        Essential Website
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        A professional online presence for businesses
                        getting started or strengthening their digital presence.
                    </p>

                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-brand-gray">
                            Starting from
                        </span>

                        <div class="mt-0.5 text-3xl font-extrabold text-brand-dark">
                            ₦250,000
                        </div>

                    </div>

                    <ul class="mt-4 space-y-2 text-sm text-brand-gray">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Up to 5 pages
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Responsive design
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Contact form
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Basic SEO setup
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Domain & hosting
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
                    onclick="orderViaWhatsApp('Starter Website', '₦250,000'); return false;"
                    class="mt-6 inline-flex items-center justify-center rounded-full border border-brand-purple px-5 py-3 text-sm font-bold text-brand-purple transition hover:bg-brand-purple hover:text-white"
                >
                    Choose Starter
                </a>

            </article>


            {{-- =========================================================
                 BUSINESS
            ========================================================== --}}
            <article
                class="relative flex flex-col rounded-[24px] border-2 border-brand-purple bg-[#17121b] p-6 shadow-xl shadow-brand-purple/10"
            >

                {{-- Recommended --}}
                <span
                    class="absolute -top-3 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-brand-purple px-4 py-1 text-[10px] font-black uppercase tracking-[0.15em] text-white"
                >
                    Recommended
                </span>


                <div class="flex-1">

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[#c98bd0]">
                        Business
                    </span>

                    <h3 class="mt-2 text-xl font-bold text-white">
                        Growth Website
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/50">
                        A stronger digital presence for businesses ready
                        to attract, engage and convert more customers.
                    </p>

                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-white/40">
                            Starting from
                        </span>

                        <div class="mt-0.5 text-3xl font-extrabold text-white">
                            ₦450,000
                        </div>

                    </div>

                    <ul class="mt-4 space-y-2 text-sm text-white/60">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Up to 10 pages
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Custom UI/UX design
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Advanced SEO structure
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Lead & contact forms
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Domain & hosting
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
                    onclick="orderViaWhatsApp('Business Website', '₦450,000'); return false;"
                    class="mt-6 inline-flex items-center justify-center rounded-full bg-brand-purple px-5 py-3 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-brand-purple-dark"
                >
                    Choose Business
                </a>

            </article>


            {{-- =========================================================
                 CUSTOM
            ========================================================== --}}
            <article
                class="flex flex-col rounded-[24px] border border-gray-200 bg-brand-light p-6"
            >

                <div class="flex-1">

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-brand-red">
                        Custom
                    </span>

                    <h3 class="mt-2 text-xl font-bold text-brand-dark">
                        Tailored Website
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        For organizations that need advanced functionality,
                        integrations or a completely tailored digital platform.
                    </p>

                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-brand-gray">
                            Pricing
                        </span>

                        <div class="mt-0.5 text-3xl font-extrabold text-brand-dark">
                            Let's Talk
                        </div>

                    </div>

                    <ul class="mt-4 space-y-2 text-sm text-brand-gray">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Custom project scope
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Advanced functionality
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Custom integrations
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Tailored UI/UX
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Domain & hosting
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
                    onclick="orderViaWhatsApp('Custom Website'); return false;"
                    class="mt-6 inline-flex items-center justify-center rounded-full border border-brand-red px-5 py-3 text-sm font-bold text-brand-red transition hover:bg-brand-red hover:text-white"
                >
                    Discuss Your Project
                </a>

            </article>

        </div>


               {{-- Pricing Note --}}
        <p class="mt-6 text-center text-xs leading-5 text-brand-gray">
            All packages include domain registration and hosting.
            Final scope and pricing for Custom projects will be determined
            based on your specific requirements.
        </p>

    </div>


    {{-- ================================================================
         SECTION DIVIDER
    ================================================================= --}}
    <div
        class="mx-auto h-px max-w-[1100px] bg-gradient-to-r from-transparent via-brand-purple/25 to-transparent"
        aria-hidden="true"
    ></div>

</section>


    {{-- ================================================================
         FEATURES
    ================================================================= --}}
    <section
        id="website-features"
        class="relative overflow-hidden bg-white"
        aria-labelledby="website-features-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.85fr_1.15fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Built for Performance
                        </span>

                    </div>

                    <h2
                        id="website-features-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        The foundation of a strong business website.
                    </h2>

                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        We consider the experience, technology and visibility
                        of your website from the beginning.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Responsive Design
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Your website should provide a strong experience
                            across phones, tablets and desktop devices.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            SEO-Friendly Structure
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Clean structure, meaningful content and technical
                            foundations that support search visibility.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Fast Performance
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            We consider performance and efficient asset loading
                            as part of the development process.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Clear User Experience
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Navigation and content are structured to help
                            visitors understand what you offer and what to do next.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Secure Development
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            We follow responsible development practices and
                            consider security throughout the project.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Scalable Foundation
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Your website can evolve as your content, services
                            and business requirements grow.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         OUR PROCESS
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="website-process-heading"
    >

        <div
            aria-hidden="true"
            class="absolute -left-40 top-0 h-[450px] w-[450px] rounded-full bg-brand-purple/20 blur-[120px]"
        ></div>

        <div class="relative mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Our Process
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>

                <h2
                    id="website-process-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    From idea to launch.
                </h2>

                <p class="mt-5 text-base leading-7 text-white/50 sm:text-lg">
                    A structured process helps us build the right website
                    without losing sight of your business objectives.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <span class="text-xs font-black text-brand-purple">
                        01
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Discovery
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        We understand your business, audience, goals and requirements.
                    </p>

                </article>


                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <span class="text-xs font-black text-brand-red">
                        02
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Strategy & Design
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        We plan the structure, content, user experience and visual direction.
                    </p>

                </article>


                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <span class="text-xs font-black text-brand-purple">
                        03
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Development
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        We build, test and refine the website using appropriate technologies.
                    </p>

                </article>


                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <span class="text-xs font-black text-brand-red">
                        04
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Launch & Growth
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        We prepare the website for launch and identify opportunities for ongoing improvement.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         WHY TECHCROSSBREED
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="website-why-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Why Techcrossbreed
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>

                <h2
                    id="website-why-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A website built around your goals.
                </h2>

                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    We bring together business thinking, design, development
                    and SEO to create websites that have a purpose.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Business-Focused
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Your website is aligned with what your business needs to achieve.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        SEO-Conscious
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        We build with search visibility and content structure in mind.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Modern & Responsive
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Your website is designed for today's devices and digital expectations.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Built to Grow
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        We create a foundation that can evolve with your business.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         FAQ
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-brand-light"
        aria-labelledby="website-faq-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Frequently Asked Questions
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>

                <h2
                    id="website-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Website development questions.
                </h2>

            </div>


            <div class="mt-12 space-y-4">


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            How much does a business website cost?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Website cost depends on the scope, number of pages,
                            features, integrations, content requirements and
                            overall project objectives. Contact us with your
                            requirements and we'll help determine the right scope.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Will my website work on mobile phones?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Responsive design is an important part of our
                            development process, so your website is designed
                            to work across mobile, tablet and desktop devices.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you build an SEO-friendly website?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. We consider technical structure, content,
                            headings, metadata, performance, responsive design,
                            internal linking and other SEO fundamentals during
                            development.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you redesign an existing website?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. We can review an existing website and identify
                            opportunities to improve its design, usability,
                            performance, content structure and overall business
                            effectiveness.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            How long does website development take?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>

                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Project timelines vary depending on the size,
                            features, content and complexity of the website.
                            We'll establish a realistic timeline after
                            understanding your requirements.
                        </p>

                    </div>

                </details>

            </div>

        </div>

    </section>


    {{-- ================================================================
         RELATED SERVICES
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="related-services-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                    Related Services
                </p>

                <h2
                    id="related-services-heading"
                    class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Build more than a website.
                </h2>

                <p class="mt-4 text-base leading-7 text-brand-gray">
                    Combine website development with other digital capabilities
                    to create a stronger online presence.
                </p>

            </div>


            <div class="mt-10 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/ui-ux-design') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    UI/UX Design
                </a>

                <a
                    href="{{ url('/services/seo-digital-growth') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    SEO & Digital Growth
                </a>

                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Software Development
                </a>

                <a
                    href="{{ url('/services/data-analytics') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Data Analytics
                </a>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="website-cta-heading"
    >

        <div
            aria-hidden="true"
            class="absolute -left-32 -top-32 h-[400px] w-[400px] rounded-full bg-brand-purple/20 blur-[110px]"
        ></div>

        <div
            aria-hidden="true"
            class="absolute -bottom-32 -right-32 h-[400px] w-[400px] rounded-full bg-brand-red/15 blur-[110px]"
        ></div>


        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Start Your Project
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="website-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Ready for a website that works for your business?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Tell us what you're building, what you're trying to achieve
                and where you need help. Let's create a website with purpose.
            </p>


            <div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">

                <a
                    href="#"
onclick="orderViaWhatsApp('Website Development'); return false;"
                    class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
                >
                    Start a Project

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform group-hover:translate-x-1"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                        />
                    </svg>

                </a>


                <a
                    href="{{ url('/services') }}"
                    class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-4 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                >
                    View All Services
                </a>

            </div>

        </div>

    </section>

@endsection