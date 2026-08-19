@extends('layouts.app')

@section('title', 'Digital Services for Businesses | Websites, Software, SEO & More | Techcrossbreed')

@section(
    'meta_description',
    'Explore Techcrossbreed digital services including website development, custom software, UI/UX design, SEO, data analytics and digital transformation for businesses.'
)

@section('canonical', url('/services'))

@section(
    'og_title',
    'Digital Services for Businesses | Techcrossbreed'
)

@section(
    'og_description',
    'Professional website development, custom software, UI/UX design, SEO, data analytics and digital transformation services for businesses.'
)

@section('og_url', url('/services'))

@section(
    'og_image_alt',
    'Techcrossbreed digital services for businesses'
)

@section(
    'twitter_title',
    'Digital Services for Businesses | Techcrossbreed'
)

@section(
    'twitter_description',
    'Explore Techcrossbreed services for websites, software, SEO, UI/UX, analytics and digital transformation.'
)

@section('content')

    {{-- ================================================================
         SERVICES HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="services-heading"
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

            <div class="mx-auto max-w-4xl text-center">

                <div class="mb-6 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Our Services
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h1
                    id="services-heading"
                    class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                >
                    Digital solutions designed around your business.
                </h1>


                <p class="mx-auto mt-6 max-w-3xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                    From professional websites and custom software to SEO,
                    data analytics and digital transformation, we build
                    technology that helps businesses operate smarter and grow.
                </p>


                <div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">

                    <a
                        href="{{ url('/contact') }}"
                        class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                    >
                        Start a Project

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
                        href="#services-list"
                        class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                    >
                        Explore Services
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         INTRODUCTION
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="services-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Technology That Works
                        </span>

                    </div>


                    <h2
                        id="services-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        We don't just build technology. We solve business problems.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">

                    <p>
                        Every business has different goals, processes and
                        challenges. That's why we don't believe in
                        one-size-fits-all digital solutions.
                    </p>

                    <p>
                        We work with you to understand what you are trying
                        to achieve, identify the right approach and build
                        technology that supports your business today while
                        giving you room to grow tomorrow.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SERVICES LIST
    ================================================================= --}}
    <section
        id="services-list"
        class="relative overflow-hidden bg-brand-light"
        aria-labelledby="services-list-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        What We Do
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="services-list-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
                >
                    Our core digital services.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    Choose the service that matches your business needs, or
                    talk to us about a solution that combines multiple areas
                    of expertise.
                </p>

            </div>


            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">


                {{-- =====================================================
                     WEBSITE DEVELOPMENT
                ====================================================== --}}
                <article
                    class="group flex flex-col rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10 sm:p-8"
                >

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-purple-light text-brand-purple">

                            <span class="text-lg font-black">
                                01
                            </span>

                        </div>

                        <span class="text-xs font-bold text-gray-300">
                            WEB
                        </span>

                    </div>


                    <h3 class="mt-7 text-xl font-bold text-brand-dark">
                        Website Development
                    </h3>


                    <p class="mt-3 flex-1 text-sm leading-7 text-brand-gray">
                        Professional, responsive and SEO-friendly websites
                        designed to establish your online presence, communicate
                        your value and turn visitors into customers.
                    </p>


                    <a
                        href="{{ url('/services/website-development') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                    >
                        Explore Website Development

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

                </article>


                {{-- =====================================================
                     SOFTWARE DEVELOPMENT
                ====================================================== --}}
                <article
                    class="group flex flex-col rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10 sm:p-8"
                >

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-red-light text-brand-red">

                            <span class="text-lg font-black">
                                02
                            </span>

                        </div>

                        <span class="text-xs font-bold text-gray-300">
                            SOFTWARE
                        </span>

                    </div>


                    <h3 class="mt-7 text-xl font-bold text-brand-dark">
                        Custom Software Development
                    </h3>


                    <p class="mt-3 flex-1 text-sm leading-7 text-brand-gray">
                        Custom web applications and business systems built
                        around your workflows, processes, data and operational
                        requirements.
                    </p>


                    <a
                        href="{{ url('/services/software-development') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-brand-red transition hover:text-brand-purple"
                    >
                        Explore Software Development

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

                </article>


                {{-- =====================================================
                     UI/UX DESIGN
                ====================================================== --}}
                <article
                    class="group flex flex-col rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10 sm:p-8"
                >

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-purple-light text-brand-purple">

                            <span class="text-lg font-black">
                                03
                            </span>

                        </div>

                        <span class="text-xs font-bold text-gray-300">
                            DESIGN
                        </span>

                    </div>


                    <h3 class="mt-7 text-xl font-bold text-brand-dark">
                        UI/UX Design
                    </h3>


                    <p class="mt-3 flex-1 text-sm leading-7 text-brand-gray">
                        User-focused interfaces and digital experiences that
                        make websites and applications easier, clearer and
                        more enjoyable to use.
                    </p>


                    <a
                        href="{{ url('/services/ui-ux-design') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                    >
                        Explore UI/UX Design

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

                </article>


                {{-- =====================================================
                     SEO
                ====================================================== --}}
                <article
                    class="group flex flex-col rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10 sm:p-8"
                >

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-red-light text-brand-red">

                            <span class="text-lg font-black">
                                04
                            </span>

                        </div>

                        <span class="text-xs font-bold text-gray-300">
                            GROWTH
                        </span>

                    </div>


                    <h3 class="mt-7 text-xl font-bold text-brand-dark">
                        SEO & Digital Growth
                    </h3>


                    <p class="mt-3 flex-1 text-sm leading-7 text-brand-gray">
                        Search engine optimization and digital growth
                        strategies designed to improve visibility, attract
                        relevant traffic and strengthen your online presence.
                    </p>


                    <a
                        href="{{ url('/services/seo-digital-growth') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-brand-red transition hover:text-brand-purple"
                    >
                        Explore SEO Services

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

                </article>


                {{-- =====================================================
                     DATA ANALYTICS
                ====================================================== --}}
                <article
                    class="group flex flex-col rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10 sm:p-8"
                >

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-purple-light text-brand-purple">

                            <span class="text-lg font-black">
                                05
                            </span>

                        </div>

                        <span class="text-xs font-bold text-gray-300">
                            DATA
                        </span>

                    </div>


                    <h3 class="mt-7 text-xl font-bold text-brand-dark">
                        Data Analytics
                    </h3>


                    <p class="mt-3 flex-1 text-sm leading-7 text-brand-gray">
                        Turn business data into useful insights through
                        dashboards, reporting, analytics and data-driven
                        decision support.
                    </p>


                    <a
                        href="{{ url('/services/data-analytics') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                    >
                        Explore Data Analytics

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

                </article>


                {{-- =====================================================
                     DIGITAL TRANSFORMATION
                ====================================================== --}}
                <article
                    class="group flex flex-col rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10 sm:p-8"
                >

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-red-light text-brand-red">

                            <span class="text-lg font-black">
                                06
                            </span>

                        </div>

                        <span class="text-xs font-bold text-gray-300">
                            TRANSFORM
                        </span>

                    </div>


                    <h3 class="mt-7 text-xl font-bold text-brand-dark">
                        Digital Transformation
                    </h3>


                    <p class="mt-3 flex-1 text-sm leading-7 text-brand-gray">
                        Technology-led improvements that help organizations
                        modernize processes, improve efficiency and create
                        better digital experiences.
                    </p>


                    <a
                        href="{{ url('/services/digital-transformation') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-brand-red transition hover:text-brand-purple"
                    >
                        Explore Digital Transformation

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

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         OUR APPROACH
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="approach-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Our Approach
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="approach-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    From business problem to digital solution.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    Our process keeps the business objective at the center
                    of every project.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-purple">
                        01
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Understand
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        We learn about your business, users, challenges and goals.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-red">
                        02
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Plan
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        We define the right solution, scope, technology and priorities.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-purple">
                        03
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Build
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        We design and develop the solution with quality and usability in mind.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-red">
                        04
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Improve
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        We measure, refine and help your digital solution evolve with your business.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         WHY CHOOSE US
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="services-why-heading"
    >

        <div
            aria-hidden="true"
            class="absolute -right-40 top-0 h-[450px] w-[450px] rounded-full bg-brand-purple/20 blur-[120px]"
        ></div>


        <div class="relative mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            Why Work With Us
                        </span>

                    </div>


                    <h2
                        id="services-why-heading"
                        class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                    >
                        Technology with business purpose.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-white/55 sm:text-lg sm:leading-8">
                        We combine strategy, design and technology to create
                        solutions that are practical, scalable and focused
                        on outcomes.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Business-first thinking
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We start with your objectives rather than forcing
                            your business into a technology.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Custom-built solutions
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            Your processes and requirements shape the solution.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            SEO-conscious development
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We consider search visibility and performance from
                            the beginning.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Built to evolve
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We build with future improvements and growth in mind.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SERVICES CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-brand-light"
        aria-labelledby="services-cta-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Let's Work Together
            </p>


            <h2
                id="services-cta-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Not sure which service you need?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-brand-gray">
                Tell us about your business, challenge or idea. We'll help
                you identify the right digital approach.
            </p>


            <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">

                <a
                    href="{{ url('/contact') }}"
                    class="inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-brand-purple/15 transition hover:-translate-y-0.5 hover:bg-brand-purple-dark"
                >
                    Talk to Techcrossbreed

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
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                        />
                    </svg>

                </a>


                <a
                    href="{{ url('/projects') }}"
                    class="inline-flex items-center justify-center rounded-full border border-gray-200 px-7 py-3.5 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    View Our Projects
                </a>

            </div>

        </div>

    </section>

@endsection