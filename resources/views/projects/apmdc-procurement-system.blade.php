@extends('layouts.app')

@section('title', 'APMDC Procurement & Vendor Management System | Techcrossbreed')

@section(
    'meta_description',
    'Explore the APMDC Procurement and Vendor Management System developed by Techcrossbreed to digitize procurement workflows, vendor management, approvals and purchasing operations.'
)

@section('canonical', url('/projects/apmdc-procurement-system'))

@section(
    'og_title',
    'APMDC Procurement & Vendor Management System | Techcrossbreed'
)

@section(
    'og_description',
    'A custom procurement and vendor management platform developed by Techcrossbreed to organize purchasing workflows, approvals and supplier information.'
)

@section('og_url', url('/projects/apmdc-procurement-system'))

@section(
    'twitter_title',
    'APMDC Procurement & Vendor Management System | Techcrossbreed'
)

@section(
    'twitter_description',
    'Explore the custom procurement and vendor management system developed by Techcrossbreed for APMDC.'
)

@section('content')

    {{-- ================================================================
         BREADCRUMB
    ================================================================= --}}
    <section class="bg-white">

        <div class="mx-auto max-w-[1200px] px-6 pt-8 sm:px-8 lg:px-10">

            <nav aria-label="Breadcrumb">

                <ol class="flex flex-wrap items-center gap-2 text-sm text-brand-gray">

                    <li>
                        <a
                            href="{{ url('/') }}"
                            class="transition hover:text-brand-purple"
                        >
                            Home
                        </a>
                    </li>

                    <li aria-hidden="true">/</li>

                    <li>
                        <a
                            href="{{ route('projects.index') }}"
                            class="transition hover:text-brand-purple"
                        >
                            Projects
                        </a>
                    </li>

                    <li aria-hidden="true">/</li>

                    <li class="font-medium text-brand-dark">
                        Procurement & Vendor Management
                    </li>

                </ol>

            </nav>

        </div>

    </section>


    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="procurement-heading"
    >

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand-purple/25 blur-[130px]"
        ></div>

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -left-40 bottom-0 h-[420px] w-[420px] rounded-full bg-brand-red/15 blur-[120px]"
        ></div>


        <div class="relative mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid items-center gap-12 lg:grid-cols-[1fr_1fr] lg:gap-20">

                <div>

                    <div class="mb-6 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            Business System
                        </span>

                    </div>


                    <h1
                        id="procurement-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        APMDC Procurement & Vendor Management System
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-8 text-white/60 sm:text-lg">
                        A digital procurement platform designed to organize
                        purchasing workflows, vendor information, approvals
                        and procurement activities within one structured system.
                    </p>


                    <div class="mt-8 flex flex-wrap gap-3">

                        <span class="rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-bold text-white">
                            Procurement
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-bold text-white">
                            Vendor Management
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-bold text-white">
                            Custom Software
                        </span>

                    </div>

                </div>


                {{-- Procurement dashboard visual --}}
                <div>

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-5 sm:p-7">

                            <div class="flex gap-4">

                                {{-- Sidebar --}}
                                <div class="w-1/4 rounded-2xl bg-white/[0.04] p-3">

                                    <div class="h-7 rounded-lg bg-brand-purple/20"></div>

                                    <div class="mt-5 space-y-3">

                                        <div class="h-2 rounded bg-brand-purple/30"></div>

                                        <div class="h-2 rounded bg-white/10"></div>

                                        <div class="h-2 rounded bg-white/10"></div>

                                        <div class="h-2 rounded bg-white/10"></div>

                                        <div class="h-2 rounded bg-brand-red/20"></div>

                                    </div>

                                </div>


                                {{-- Dashboard --}}
                                <div class="flex-1">

                                    <div class="flex items-center justify-between">

                                        <div class="h-7 w-36 rounded-lg bg-white/[0.06]"></div>

                                        <div class="h-8 w-8 rounded-lg bg-brand-purple/20"></div>

                                    </div>


                                    <div class="mt-5 grid grid-cols-3 gap-3">

                                        <div class="rounded-xl bg-brand-purple/15 p-3">

                                            <div class="h-2 w-12 rounded bg-white/20"></div>

                                            <div class="mt-4 h-5 w-16 rounded bg-white/10"></div>

                                        </div>


                                        <div class="rounded-xl bg-white/[0.05] p-3">

                                            <div class="h-2 w-12 rounded bg-white/20"></div>

                                            <div class="mt-4 h-5 w-16 rounded bg-white/10"></div>

                                        </div>


                                        <div class="rounded-xl bg-brand-red/10 p-3">

                                            <div class="h-2 w-12 rounded bg-white/20"></div>

                                            <div class="mt-4 h-5 w-16 rounded bg-white/10"></div>

                                        </div>

                                    </div>


                                    <div class="mt-4 rounded-2xl bg-white/[0.04] p-4">

                                        <div class="flex items-center justify-between">

                                            <div class="h-3 w-24 rounded bg-white/10"></div>

                                            <div class="h-3 w-12 rounded bg-white/10"></div>

                                        </div>


                                        <div class="mt-5 space-y-3">

                                            <div class="h-2 rounded bg-white/[0.06]"></div>

                                            <div class="h-2 rounded bg-white/[0.06]"></div>

                                            <div class="h-2 rounded bg-white/[0.06]"></div>

                                            <div class="h-2 rounded bg-brand-purple/20"></div>

                                        </div>

                                    </div>

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
                        Project Type
                    </p>

                    <p class="mt-2 font-bold text-brand-dark">
                        Procurement System
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
        aria-labelledby="procurement-overview-heading"
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
                        id="procurement-overview-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Bringing procurement activities into one connected system.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Procurement involves multiple activities including
                        requests, approvals, purchasing, supplier information
                        and internal coordination.
                    </p>

                    <p>
                        Techcrossbreed developed a digital procurement and
                        vendor management platform to help organize these
                        activities within a structured business system.
                    </p>

                    <p>
                        The platform provides a foundation for improving
                        procurement visibility, organizing vendor information
                        and creating more consistent workflows.
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
        aria-labelledby="procurement-challenge-heading"
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
                        id="procurement-challenge-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Making procurement easier to organize and manage.
                    </h2>

                </div>


                <div class="space-y-4">

                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Procurement Requests
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Create a structured environment for initiating
                            and managing procurement requirements.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Approval Workflows
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Organize procurement activities around appropriate
                            review and approval processes.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Vendor Information
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Maintain structured information about vendors and
                            suppliers within the procurement environment.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Procurement Visibility
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Provide authorized users with better visibility
                            into procurement activities and their progress.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SOLUTION
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="procurement-solution-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        The Solution
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="procurement-solution-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A structured digital procurement workflow.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    The system brings procurement activities, vendor
                    information and workflow processes into one digital
                    environment.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @php
                    $features = [
                        [
                            'number' => '01',
                            'title' => 'Procurement Requests',
                            'text' => 'Capture and organize procurement requirements within a structured workflow.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Vendor Management',
                            'text' => 'Maintain organized supplier and vendor information.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Approval Workflows',
                            'text' => 'Support structured review and approval processes.',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Procurement Tracking',
                            'text' => 'Provide visibility into procurement activities and their progress.',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Centralized Records',
                            'text' => 'Keep relevant procurement information accessible within one system.',
                        ],
                        [
                            'number' => '06',
                            'title' => 'Scalable Architecture',
                            'text' => 'Provide a foundation for expanding procurement capabilities over time.',
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
         WORKFLOW
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="procurement-workflow-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Digital Workflow
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="procurement-workflow-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    From request to procurement visibility.
                </h2>

            </div>


            <div class="mt-14 grid gap-4 md:grid-cols-4">

                <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                    <span class="text-xs font-black text-brand-purple">
                        01
                    </span>

                    <h3 class="mt-5 font-bold text-white">
                        Request
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Procurement requirements enter the digital workflow.
                    </p>

                </article>


                <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                    <span class="text-xs font-black text-brand-red">
                        02
                    </span>

                    <h3 class="mt-5 font-bold text-white">
                        Review
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Relevant users review procurement requirements.
                    </p>

                </article>


                <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                    <span class="text-xs font-black text-brand-purple">
                        03
                    </span>

                    <h3 class="mt-5 font-bold text-white">
                        Approve
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Authorized approvals move the process forward.
                    </p>

                </article>


                <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                    <span class="text-xs font-black text-brand-red">
                        04
                    </span>

                    <h3 class="mt-5 font-bold text-white">
                        Track
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Procurement activities remain visible within the system.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         VENDOR MANAGEMENT
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="vendor-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Vendor Management
                        </span>

                    </div>


                    <h2
                        id="vendor-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Keep supplier information organized.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        Vendor management becomes more useful when supplier
                        information and procurement activities can be managed
                        within the same digital environment.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Vendor Records
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Organize relevant supplier information within the platform.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Procurement Context
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Connect vendor information with procurement activities.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Better Organization
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Reduce fragmentation across supplier-related information.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Future Ready
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Create a foundation for expanding vendor capabilities.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         TECHNOLOGY
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="procurement-technology-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-center">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Technology
                        </span>

                    </div>


                    <h2
                        id="procurement-technology-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Built as a scalable business application.
                    </h2>

                </div>


                <div class="flex flex-wrap gap-3">

                    <span class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark">
                        Laravel
                    </span>

                    <span class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark">
                        PHP
                    </span>

                    <span class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark">
                        Tailwind CSS
                    </span>

                    <span class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark">
                        JavaScript
                    </span>

                    <span class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark">
                        MySQL
                    </span>

                    <span class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark">
                        Git
                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROJECT PREVIEW
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="procurement-preview-heading"
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
                    id="procurement-preview-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Inside the procurement platform.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray">
                    Actual system screenshots can be added here as the
                    portfolio assets are prepared.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-2">

                <div class="aspect-[16/10] rounded-[28px] border border-gray-200 bg-white p-5 shadow-sm">

                    <div class="flex h-full items-center justify-center rounded-[20px] bg-[#211a25]">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/30">
                            Procurement Dashboard
                        </p>

                    </div>

                </div>


                <div class="aspect-[16/10] rounded-[28px] border border-gray-200 bg-white p-5 shadow-sm">

                    <div class="flex h-full items-center justify-center rounded-[20px] bg-[#211a25]">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/30">
                            Vendor Management
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
        aria-labelledby="procurement-outcome-heading"
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
                    id="procurement-outcome-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A stronger digital foundation for procurement operations.
                </h2>


                <p class="mt-5 text-base leading-8 text-brand-gray sm:text-lg">
                    The system creates a structured environment for procurement
                    activities and vendor information while establishing a
                    foundation for continued digital process improvement.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-3">

                <div class="rounded-[26px] border border-gray-200 bg-brand-light p-7 text-center">

                    <p class="text-3xl font-black text-brand-purple">
                        01
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Organized Procurement
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Procurement activities are brought into a structured digital workflow.
                    </p>

                </div>


                <div class="rounded-[26px] border border-gray-200 bg-brand-light p-7 text-center">

                    <p class="text-3xl font-black text-brand-red">
                        02
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Vendor Visibility
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Supplier information can be managed within the procurement environment.
                    </p>

                </div>


                <div class="rounded-[26px] border border-gray-200 bg-brand-light p-7 text-center">

                    <p class="text-3xl font-black text-brand-purple">
                        03
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Scalable System
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        The platform provides a foundation for future procurement capabilities.
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
                Need a business system like this?
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Software Development
                </a>

                <a
                    href="{{ url('/services/digital-transformation') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Digital Transformation
                </a>

                <a
                    href="{{ url('/services/data-analytics') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
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
        class="bg-[#17121b]"
        aria-labelledby="procurement-cta-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Build Your System
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="procurement-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Ready to digitize your business processes?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Let's turn your procurement, operations or business workflow
                into a structured digital system.
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