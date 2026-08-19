@extends('layouts.app')



@section('title', 'APMDC Corporate Website & Web Platform | Techcrossbreed')

@section(
    'meta_description',
    'Explore the APMDC corporate website and web platform designed and developed by Techcrossbreed to strengthen digital presence, communicate services and support online engagement.'
)

@section('canonical', url('/projects/apmdc-corporate-website'))

@section('og_title', 'APMDC Corporate Website & Web Platform | Techcrossbreed')

@section(
    'og_description',
    'A modern corporate website and web platform developed by Techcrossbreed for APMDC.'
)

@section('og_url', url('/projects/apmdc-corporate-website'))

@section('twitter_title', 'APMDC Corporate Website & Web Platform | Techcrossbreed')

@section(
    'twitter_description',
    'Explore how Techcrossbreed designed and developed the APMDC corporate website and web platform.'
)

@section('content')

    {{-- ================================================================
         BREADCRUMB
    ================================================================= --}}
    <section class="bg-white">

        <div class="mx-auto max-w-[1200px] px-6 pt-8 sm:px-8 lg:px-10">

            <nav
                aria-label="Breadcrumb"
                class="text-sm text-brand-gray"
            >

                <ol class="flex flex-wrap items-center gap-2">

                    <li>
                        <a
                            href="{{ url('/') }}"
                            class="transition hover:text-brand-purple"
                        >
                            Home
                        </a>
                    </li>

                    <li aria-hidden="true">
                        /
                    </li>

                    <li>
                        <a
                            href="{{ route('projects.index') }}"
                            class="transition hover:text-brand-purple"
                        >
                            Projects
                        </a>
                    </li>

                    <li aria-hidden="true">
                        /
                    </li>

                    <li class="font-medium text-brand-dark">
                        APMDC Corporate Website
                    </li>

                </ol>

            </nav>

        </div>

    </section>


    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="project-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-16 sm:px-8 lg:px-10 lg:py-24">

            <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">

                <div>

                    <div class="mb-6 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Website Development
                        </span>

                    </div>


                    <h1
                        id="project-heading"
                        class="text-4xl font-extrabold tracking-tight text-brand-dark sm:text-5xl lg:text-6xl"
                    >
                        APMDC Corporate Website & Web Platform
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-8 text-brand-gray sm:text-lg">
                        A modern corporate website and digital platform designed
                        to strengthen APMDC's online presence, communicate its
                        services and provide a stronger digital experience for
                        its audience.
                    </p>


                    <div class="mt-8 flex flex-wrap gap-3">

                        <span class="rounded-full bg-brand-light px-4 py-2 text-xs font-bold text-brand-purple">
                            Corporate Website
                        </span>

                        <span class="rounded-full bg-brand-light px-4 py-2 text-xs font-bold text-brand-purple">
                            Web Platform
                        </span>

                        <span class="rounded-full bg-brand-light px-4 py-2 text-xs font-bold text-brand-purple">
                            Laravel
                        </span>

                    </div>

                </div>


                {{-- Project visual --}}
                <div>

                    <div class="relative overflow-hidden rounded-[32px] bg-[#17121b] p-5 shadow-2xl sm:p-7">

                        <div
                            class="absolute -right-20 -top-20 h-60 w-60 rounded-full bg-brand-purple/20 blur-3xl"
                            aria-hidden="true"
                        ></div>


                        <div class="relative rounded-[24px] border border-white/10 bg-white/[0.05] p-5">

                            <div class="flex items-center justify-between">

                                <div class="h-3 w-28 rounded-full bg-white/20"></div>

                                <div class="flex gap-1.5">

                                    <span class="h-2 w-2 rounded-full bg-white/20"></span>
                                    <span class="h-2 w-2 rounded-full bg-white/20"></span>
                                    <span class="h-2 w-2 rounded-full bg-white/20"></span>

                                </div>

                            </div>


                            <div class="mt-7 grid gap-3">

                                <div class="h-32 rounded-2xl bg-brand-purple/20"></div>

                                <div class="grid grid-cols-3 gap-3">

                                    <div class="h-20 rounded-xl bg-white/[0.06]"></div>

                                    <div class="h-20 rounded-xl bg-brand-red/10"></div>

                                    <div class="h-20 rounded-xl bg-white/[0.06]"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROJECT INFORMATION
    ================================================================= --}}
    <section class="bg-brand-light">

        <div class="mx-auto max-w-[1200px] px-6 py-12 sm:px-8 lg:px-10 lg:py-16">

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gray">
                        Client
                    </p>

                    <p class="mt-2 font-bold text-brand-dark">
                        APMDC
                    </p>

                </div>


                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gray">
                        Industry
                    </p>

                    <p class="mt-2 font-bold text-brand-dark">
                        Maritime & Logistics
                    </p>

                </div>


                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gray">
                        Service
                    </p>

                    <p class="mt-2 font-bold text-brand-dark">
                        Website Development
                    </p>

                </div>


                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gray">
                        Technology
                    </p>

                    <p class="mt-2 font-bold text-brand-dark">
                        Laravel
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         OVERVIEW
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="overview-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.7fr_1.3fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Project Overview
                        </span>

                    </div>


                    <h2
                        id="overview-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        A stronger digital foundation for APMDC.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        APMDC required a modern digital presence capable of
                        clearly communicating its organization, services and
                        value proposition to its online audience.
                    </p>

                    <p>
                        Techcrossbreed designed and developed a responsive
                        corporate website and web platform focused on clarity,
                        usability, performance and a professional digital
                        experience.
                    </p>

                    <p>
                        The platform also provides a foundation for continued
                        digital growth, content publishing and future online
                        services.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CHALLENGE
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="challenge-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-2 lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            The Challenge
                        </span>

                    </div>


                    <h2
                        id="challenge-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Creating a professional digital experience around a complex business.
                    </h2>

                </div>


                <div class="space-y-4">

                    <div class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Clear Communication
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Present APMDC's organization, services and value
                            clearly to different types of website visitors.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Modern User Experience
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Create a responsive experience that works smoothly
                            across desktop, tablet and mobile devices.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Digital Growth
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Establish a scalable platform that can support
                            additional content and digital capabilities over time.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SOLUTION
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="solution-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Our Solution
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="solution-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A modern website built around the organization.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    We combined corporate communication, responsive design,
                    structured content and a scalable Laravel foundation into
                    one cohesive digital platform.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @php
                    $features = [
                        [
                            'number' => '01',
                            'title' => 'Corporate Website',
                            'text' => 'A professional digital presence that communicates the organization and its services.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Responsive Design',
                            'text' => 'A user experience designed to work across modern desktop, tablet and mobile devices.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Service Presentation',
                            'text' => 'Structured service content that makes key offerings easier for visitors to understand.',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Content Platform',
                            'text' => 'A foundation for publishing articles, updates and other relevant business content.',
                        ],
                        [
                            'number' => '05',
                            'title' => 'SEO Foundation',
                            'text' => 'Structured page content and technical foundations designed with search visibility in mind.',
                        ],
                        [
                            'number' => '06',
                            'title' => 'Scalable Architecture',
                            'text' => 'A Laravel-based platform that can evolve as additional digital requirements emerge.',
                        ],
                    ];
                @endphp


                @foreach ($features as $feature)

                    <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                        <span class="text-xs font-black {{ $loop->even ? 'text-brand-red' : 'text-brand-purple' }}">
                            {{ $feature['number'] }}
                        </span>


                        <h3 class="mt-5 text-lg font-bold text-brand-dark">
                            {{ $feature['title'] }}
                        </h3>


                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            {{ $feature['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ================================================================
         TECHNOLOGY
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="technology-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-center">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            Technology
                        </span>

                    </div>


                    <h2
                        id="technology-heading"
                        class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                    >
                        Built with a modern web technology stack.
                    </h2>

                </div>


                <div class="flex flex-wrap gap-3">

                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-5 py-3 text-sm font-bold text-white">
                        Laravel
                    </span>

                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-5 py-3 text-sm font-bold text-white">
                        PHP
                    </span>

                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-5 py-3 text-sm font-bold text-white">
                        Tailwind CSS
                    </span>

                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-5 py-3 text-sm font-bold text-white">
                        Vite
                    </span>

                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-5 py-3 text-sm font-bold text-white">
                        JavaScript
                    </span>

                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-5 py-3 text-sm font-bold text-white">
                        Git
                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROJECT SCREENSHOTS
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="screenshots-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Project Preview
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="screenshots-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A closer look at the platform.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray">
                    Project screenshots can be added here as the project
                    gallery is finalized.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-2">

                <div class="aspect-[16/10] rounded-[28px] border border-gray-200 bg-white p-5 shadow-sm">

                    <div class="flex h-full items-center justify-center rounded-[20px] bg-[#211a25]">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/30">
                            Homepage Screenshot
                        </p>

                    </div>

                </div>


                <div class="aspect-[16/10] rounded-[28px] border border-gray-200 bg-white p-5 shadow-sm">

                    <div class="flex h-full items-center justify-center rounded-[20px] bg-[#211a25]">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/30">
                            Platform Screenshot
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         OUTCOME
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="outcome-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Project Outcome
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="outcome-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A stronger foundation for digital growth.
                </h2>


                <p class="mt-5 text-base leading-8 text-brand-gray sm:text-lg">
                    The project established a more professional online presence
                    for APMDC while creating a scalable foundation for future
                    digital content, services and platform capabilities.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-3">

                <div class="rounded-[26px] border border-gray-200 bg-brand-light p-7 text-center">

                    <p class="text-3xl font-black text-brand-purple">
                        01
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Modern Presence
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        A professional digital experience aligned with the organization's identity.
                    </p>

                </div>


                <div class="rounded-[26px] border border-gray-200 bg-brand-light p-7 text-center">

                    <p class="text-3xl font-black text-brand-red">
                        02
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Better Communication
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Services and organizational information are easier to discover and understand.
                    </p>

                </div>


                <div class="rounded-[26px] border border-gray-200 bg-brand-light p-7 text-center">

                    <p class="text-3xl font-black text-brand-purple">
                        03
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Digital Foundation
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        A platform capable of supporting continued digital development.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         RELATED SERVICES
    ================================================================= --}}
    <section class="bg-brand-light">

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl">
                Need something similar for your organization?
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/website-development') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Website Development
                </a>

                <a
                    href="{{ url('/services/ui-ux-design') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    UI/UX Design
                </a>

                <a
                    href="{{ url('/services/seo-digital-growth') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    SEO & Digital Growth
                </a>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CTA
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="project-cta-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Build Your Project
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="project-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Have a project in mind?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Let's turn your business requirements into a practical
                digital solution.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Start a Conversation

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>

            </a>

        </div>

    </section>

@endsection