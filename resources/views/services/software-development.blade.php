@extends('layouts.app')

@section('title', 'Custom Software Development Services | Business Software Solutions | Techcrossbreed')

@section(
    'meta_description',
    'Techcrossbreed develops custom software and web applications designed around your business processes, workflows and operational needs.'
)

@section('canonical', url('/services/software-development'))

@section(
    'og_title',
    'Custom Software Development Services | Techcrossbreed'
)

@section(
    'og_description',
    'Build custom business software, web applications and digital systems designed around the way your organization works.'
)

@section('og_url', url('/services/software-development'))

@section(
    'og_image_alt',
    'Techcrossbreed custom software development services'
)

@section(
    'twitter_title',
    'Custom Software Development Services | Techcrossbreed'
)

@section(
    'twitter_description',
    'Custom business software and web applications designed around your processes, workflows and operational goals.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="software-heading"
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
                            Custom Software Development
                        </span>

                    </div>


                    <h1
                        id="software-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Software built around the way your business works.
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        We design and develop custom software, web applications
                        and business systems that help organizations automate
                        processes, manage information and work more efficiently.
                    </p>


                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="#"
                            onclick="orderViaWhatsApp('Software Development'); return false;"
                            class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                        >
                            Discuss Your Project

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
                            href="#software-solutions"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore Solutions
                        </a>

                    </div>

                </div>


                {{-- Software visual --}}
                <div class="relative">

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-white/35">
                                        Business System
                                    </p>

                                    <p class="mt-2 text-xl font-bold text-white">
                                        Operations Dashboard
                                    </p>

                                </div>


                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple/20 text-brand-purple">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.6"
                                        stroke="currentColor"
                                        class="h-5 w-5"
                                    >
                                        <rect
                                            x="4"
                                            y="4"
                                            width="16"
                                            height="16"
                                            rx="2"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            d="M8 9h8M8 13h5M8 17h3"
                                        />

                                    </svg>

                                </div>

                            </div>


                            <div class="mt-8 grid grid-cols-2 gap-3">

                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[10px] uppercase tracking-wider text-white/30">
                                        Records
                                    </p>

                                    <div class="mt-3 h-7 w-16 rounded-lg bg-brand-purple/40"></div>

                                </div>


                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[10px] uppercase tracking-wider text-white/30">
                                        Tasks
                                    </p>

                                    <div class="mt-3 h-7 w-20 rounded-lg bg-brand-red/30"></div>

                                </div>

                            </div>


                            <div class="mt-3 h-20 rounded-2xl bg-white/[0.04]"></div>

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
        class="bg-white"
        aria-labelledby="software-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Business Software
                        </span>

                    </div>


                    <h2
                        id="software-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        When off-the-shelf software isn't enough.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Standard software can be useful, but businesses often
                        have processes that don't fit neatly into generic
                        systems.
                    </p>

                    <p>
                        Custom software allows your technology to reflect the
                        way your organization actually operates — from how
                        information is collected and managed to how teams
                        collaborate and complete tasks.
                    </p>

                    <p>
                        We turn business requirements into practical digital
                        systems that can improve efficiency, visibility and
                        control.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SOLUTIONS
    ================================================================= --}}
    <section
        id="software-solutions"
        class="bg-brand-light"
        aria-labelledby="software-solutions-heading"
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
                    id="software-solutions-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Custom solutions for real business needs.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @php
                    $solutions = [
                        [
                            'number' => '01',
                            'title' => 'Business Management Systems',
                            'text' => 'Centralize information, workflows and operational activities in a system designed around your organization.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '02',
                            'title' => 'HR & People Systems',
                            'text' => 'Manage employee information, workflows, tasks, leave, reporting and other people-related processes.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Procurement & Operations',
                            'text' => 'Digitize procurement, approvals, vendor management and operational workflows.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Customer Portals',
                            'text' => 'Create secure digital spaces where customers can access information, services and interactions.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Internal Web Applications',
                            'text' => 'Build browser-based applications that help teams work more efficiently and collaborate better.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '06',
                            'title' => 'Workflow Automation',
                            'text' => 'Replace repetitive manual processes with structured digital workflows and automation.',
                            'color' => 'red',
                        ],
                    ];
                @endphp


                @foreach ($solutions as $solution)

                    <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                        <span
                            class="text-xs font-black {{ $solution['color'] === 'purple' ? 'text-brand-purple' : 'text-brand-red' }}"
                        >
                            {{ $solution['number'] }}
                        </span>


                        <h3 class="mt-5 text-xl font-bold text-brand-dark">
                            {{ $solution['title'] }}
                        </h3>


                        <p class="mt-3 text-sm leading-7 text-brand-gray">
                            {{ $solution['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>

    {{-- ================================================================
     SOFTWARE DEVELOPMENT PRICING
================================================================= --}}
<section
    id="software-pricing"
    class="relative overflow-hidden bg-white"
    aria-labelledby="software-pricing-heading"
>

    <div class="mx-auto max-w-[1200px] px-6 py-14 sm:px-8 lg:px-10 lg:py-18">

        {{-- Section Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                    Software Packages
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>

            <h2
                id="software-pricing-heading"
                class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Software solutions built around your business.
            </h2>

            <p class="mx-auto mt-3 max-w-2xl text-sm leading-6 text-brand-gray sm:text-base">
                Choose a starting package or talk to us about a custom
                software solution designed around your processes.
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
                        Essential System
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        A focused business application for organizations
                        looking to digitize a specific process or workflow.
                    </p>

                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-brand-gray">
                            Starting from
                        </span>

                        <div class="mt-0.5 text-3xl font-extrabold text-brand-dark">
                            ₦500,000
                        </div>

                    </div>

                    <ul class="mt-4 space-y-2 text-sm text-brand-gray">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Core business workflow
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            User authentication
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Responsive interface
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Basic reporting
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Domain & hosting
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
onclick="orderViaWhatsApp('Starter Software System', '₦500,000'); return false;"
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
                        Business System
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/50">
                        A more complete system for organizations that need
                        multiple workflows, users and operational features.
                    </p>

                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-white/40">
                            Starting from
                        </span>

                        <div class="mt-0.5 text-3xl font-extrabold text-white">
                            ₦1,000,000
                        </div>

                    </div>

                    <ul class="mt-4 space-y-2 text-sm text-white/60">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Multiple business workflows
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Role-based user access
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Advanced dashboards
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Reports & analytics
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Domain & hosting
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
onclick="orderViaWhatsApp('Business Software System', '₦1,000,000'); return false;"
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
                        Tailored Software
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        For organizations requiring complex systems,
                        advanced integrations, automation or unique workflows.
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
                            Custom system architecture
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Advanced workflows
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            API & third-party integrations
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Automation & advanced reporting
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Domain & hosting
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
                    onclick="orderViaWhatsApp('Custom Software System'); return false;"
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
         BENEFITS
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="software-benefits-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Why Custom Software
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="software-benefits-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Technology designed around your operations.
                </h2>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Better Efficiency
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Reduce unnecessary manual work and streamline repetitive processes.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Centralized Information
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Bring important business information into a structured digital environment.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Greater Visibility
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Give teams and decision-makers better access to useful operational information.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Scalable Systems
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Build a foundation that can evolve as your processes and requirements change.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         DEVELOPMENT PROCESS
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="software-process-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Development Process
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="software-process-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    From requirements to working software.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                @php
                    $steps = [
                        ['number' => '01', 'title' => 'Discovery', 'text' => 'Understand your processes, users, requirements and objectives.'],
                        ['number' => '02', 'title' => 'Architecture', 'text' => 'Plan the system structure, workflows, data and technology.'],
                        ['number' => '03', 'title' => 'Development', 'text' => 'Build, test and refine the application in structured stages.'],
                        ['number' => '04', 'title' => 'Deployment', 'text' => 'Prepare the system for production and ongoing improvements.'],
                    ];
                @endphp


                @foreach ($steps as $step)

                    <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                        <span class="text-xs font-black {{ $loop->even ? 'text-brand-red' : 'text-brand-purple' }}">
                            {{ $step['number'] }}
                        </span>


                        <h3 class="mt-5 text-lg font-bold text-white">
                            {{ $step['title'] }}
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-white/40">
                            {{ $step['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ================================================================
         FAQ
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="software-faq-heading"
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
                    id="software-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Custom software questions.
                </h2>

            </div>


            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            When should a business consider custom software?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Custom software can make sense when existing
                            tools don't adequately support your processes,
                            when manual workflows are creating inefficiencies,
                            or when your organization needs functionality
                            specific to its operations.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you build software for our existing processes?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Understanding your existing processes is a
                            key part of discovery. We can identify opportunities
                            to digitize, improve or automate them.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can the software integrate with other systems?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Where technically appropriate, applications can
                            integrate with existing systems, APIs, databases
                            and other business tools.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you maintain and improve the software after launch?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Software can evolve as your business grows.
                            Future improvements, new functionality and
                            maintenance can be planned based on your needs.
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
        class="bg-white"
        aria-labelledby="software-related-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2
                id="software-related-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Build a complete digital solution.
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/website-development') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Website Development
                </a>

                <a
                    href="{{ url('/services/ui-ux-design') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    UI/UX Design
                </a>

                <a
                    href="{{ url('/services/data-analytics') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Data Analytics
                </a>

                <a
                    href="{{ url('/services/digital-transformation') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Digital Transformation
                </a>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="software-cta-heading"
    >

        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Build Better Systems
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="software-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Have a business process that needs a better system?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Tell us how your business works today and what you want
                to improve. We'll help you explore the right digital solution.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Discuss Your Software Project

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

        </div>

    </section>

@endsection