@extends('layouts.app')

@section('title', 'Digital Transformation Services | Business Technology Solutions | Techcrossbreed')

@section(
    'meta_description',
    'Techcrossbreed helps businesses modernize operations through digital transformation, process automation, business systems, data and technology solutions designed for sustainable growth.'
)

@section('canonical', url('/services/digital-transformation'))

@section(
    'og_title',
    'Digital Transformation Services | Techcrossbreed'
)

@section(
    'og_description',
    'Modernize your business with digital transformation strategies, process automation, software, data and technology solutions from Techcrossbreed.'
)

@section('og_url', url('/services/digital-transformation'))

@section(
    'twitter_title',
    'Digital Transformation Services | Techcrossbreed'
)

@section(
    'twitter_description',
    'Modernize business operations with digital transformation, automation, software and data-driven technology solutions.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="transformation-heading"
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
                            Digital Transformation
                        </span>

                    </div>


                    <h1
                        id="transformation-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Modernize the way your business works.
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        We help businesses replace inefficient manual processes,
                        connect technology with operations and build digital
                        systems that support smarter, more scalable ways of working.
                    </p>


                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="{{ url('/contact') }}"
                            class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                        >
                            Start Your Transformation

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
                            href="#transformation-solutions"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore Solutions
                        </a>

                    </div>

                </div>


                {{-- Transformation visual --}}
                <div class="relative">

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-white/35">
                                        Digital Operations
                                    </p>

                                    <p class="mt-2 text-xl font-bold text-white">
                                        Connected Business
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
                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="3"
                                        />

                                        <circle
                                            cx="5"
                                            cy="7"
                                            r="2"
                                        />

                                        <circle
                                            cx="19"
                                            cy="7"
                                            r="2"
                                        />

                                        <circle
                                            cx="5"
                                            cy="17"
                                            r="2"
                                        />

                                        <circle
                                            cx="19"
                                            cy="17"
                                            r="2"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            d="m7 8 2.5 2M17 8l-2.5 2M7 16l2.5-2M17 16l-2.5-2"
                                        />

                                    </svg>

                                </div>

                            </div>


                            <div class="mt-8 grid grid-cols-3 gap-3">

                                <div class="rounded-2xl bg-white/[0.05] p-4 text-center">

                                    <div class="mx-auto flex h-9 w-9 items-center justify-center rounded-xl bg-brand-purple/20 text-brand-purple">
                                        01
                                    </div>

                                    <p class="mt-3 text-[9px] uppercase tracking-wider text-white/30">
                                        Processes
                                    </p>

                                </div>


                                <div class="rounded-2xl bg-white/[0.05] p-4 text-center">

                                    <div class="mx-auto flex h-9 w-9 items-center justify-center rounded-xl bg-brand-red/20 text-brand-red">
                                        02
                                    </div>

                                    <p class="mt-3 text-[9px] uppercase tracking-wider text-white/30">
                                        Systems
                                    </p>

                                </div>


                                <div class="rounded-2xl bg-white/[0.05] p-4 text-center">

                                    <div class="mx-auto flex h-9 w-9 items-center justify-center rounded-xl bg-brand-purple/20 text-brand-purple">
                                        03
                                    </div>

                                    <p class="mt-3 text-[9px] uppercase tracking-wider text-white/30">
                                        Data
                                    </p>

                                </div>

                            </div>


                            <div class="mt-5 flex items-center justify-center">

                                <div class="h-px flex-1 bg-white/10"></div>

                                <span class="mx-3 rounded-full border border-white/10 px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white/30">
                                    Connected
                                </span>

                                <div class="h-px flex-1 bg-white/10"></div>

                            </div>


                            <div class="mt-5 rounded-2xl bg-white/[0.04] p-5">

                                <div class="flex items-center justify-between">

                                    <span class="text-[9px] font-bold uppercase tracking-wider text-white/30">
                                        Business Intelligence
                                    </span>

                                    <span class="h-2 w-2 rounded-full bg-brand-purple"></span>

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
        class="bg-white"
        aria-labelledby="transformation-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Modern Business
                        </span>

                    </div>


                    <h2
                        id="transformation-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Digital transformation is about changing how work gets done.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Digital transformation goes beyond purchasing new
                        software or putting existing paperwork online.
                    </p>

                    <p>
                        It involves examining how your organization works,
                        identifying inefficiencies and using technology to
                        create better ways to manage information, processes,
                        people and customers.
                    </p>

                    <p>
                        We help businesses connect strategy, technology and
                        operations so digital tools become part of how the
                        organization actually works.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SOLUTIONS
    ================================================================= --}}
    <section
        id="transformation-solutions"
        class="bg-brand-light"
        aria-labelledby="transformation-solutions-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Transformation Solutions
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="transformation-solutions-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Transform the areas that matter most.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    We combine strategy, software, automation, data and
                    digital experiences to address practical business challenges.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @php
                    $transformationServices = [
                        [
                            'number' => '01',
                            'title' => 'Process Digitization',
                            'text' => 'Replace paper-based and manual processes with structured digital workflows.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Workflow Automation',
                            'text' => 'Reduce repetitive work by connecting processes, approvals, notifications and business activities.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Business Systems',
                            'text' => 'Design and implement digital systems that support the way your organization operates.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Data & Reporting',
                            'text' => 'Improve how information is collected, analyzed, visualized and used for decision-making.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Digital Customer Experience',
                            'text' => 'Improve how customers interact with your business through websites, portals and digital services.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '06',
                            'title' => 'Technology Strategy',
                            'text' => 'Identify practical technology priorities and build a roadmap for sustainable digital improvement.',
                            'color' => 'red',
                        ],
                    ];
                @endphp


                @foreach ($transformationServices as $service)

                    <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                        <span
                            class="text-xs font-black {{ $service['color'] === 'purple' ? 'text-brand-purple' : 'text-brand-red' }}"
                        >
                            {{ $service['number'] }}
                        </span>


                        <h3 class="mt-5 text-xl font-bold text-brand-dark">
                            {{ $service['title'] }}
                        </h3>


                        <p class="mt-3 text-sm leading-7 text-brand-gray">
                            {{ $service['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ================================================================
         BUSINESS AREAS
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="transformation-areas-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Where We Help
                        </span>

                    </div>


                    <h2
                        id="transformation-areas-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Improve the systems behind your business.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        Transformation can begin with one process or grow into
                        a broader digital strategy.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            People & HR
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Digitize employee processes, records, workflows and internal services.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Operations
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Improve operational visibility, workflows and process efficiency.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Procurement
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Digitize purchasing, approvals, vendor management and related processes.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Customer Service
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Create easier digital experiences for customers and service users.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Management
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Improve access to information, reporting and management visibility.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Business Growth
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Build digital capabilities that support new services, customers and opportunities.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         MATURITY / BENEFITS
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="transformation-benefits-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        The Outcome
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="transformation-benefits-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    Build a business that is ready for what comes next.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <h3 class="text-lg font-bold text-white">
                        Greater Efficiency
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Reduce unnecessary manual work and make important processes easier to manage.
                    </p>

                </article>


                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <h3 class="text-lg font-bold text-white">
                        Better Visibility
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Connect information and workflows so teams can see what is happening more clearly.
                    </p>

                </article>


                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <h3 class="text-lg font-bold text-white">
                        Scalable Operations
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Create digital foundations that can grow alongside the organization.
                    </p>

                </article>


                <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                    <h3 class="text-lg font-bold text-white">
                        Smarter Decisions
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-white/40">
                        Give decision-makers better access to information and useful business insights.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROCESS
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="transformation-process-heading"
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
                    id="transformation-process-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Transformation starts with understanding the business.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                @php
                    $steps = [
                        [
                            'number' => '01',
                            'title' => 'Assess',
                            'text' => 'Understand your current processes, systems, challenges and business objectives.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Prioritize',
                            'text' => 'Identify the areas where digital improvement can create the most practical value.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Implement',
                            'text' => 'Design and deploy the technology, workflows and systems required for improvement.',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Improve',
                            'text' => 'Measure results, learn from implementation and continue improving as the business evolves.',
                        ],
                    ];
                @endphp


                @foreach ($steps as $step)

                    <article class="rounded-[26px] border border-gray-200 bg-white p-7 shadow-sm">

                        <span class="text-xs font-black {{ $loop->even ? 'text-brand-red' : 'text-brand-purple' }}">
                            {{ $step['number'] }}
                        </span>


                        <h3 class="mt-5 text-lg font-bold text-brand-dark">
                            {{ $step['title'] }}
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-brand-gray">
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
        class="bg-white"
        aria-labelledby="transformation-faq-heading"
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
                    id="transformation-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Digital transformation questions.
                </h2>

            </div>


            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            What is digital transformation?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Digital transformation is the process of using
                            technology to improve how an organization operates,
                            delivers services, manages information and creates
                            value for customers and stakeholders.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Does digital transformation require replacing everything?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Not necessarily. Transformation can begin with one
                            process, department or system. The right approach
                            depends on the organization's current technology,
                            priorities and objectives.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you help us identify where to start?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Understanding the current business processes,
                            systems and challenges is an important first step.
                            From there, priorities can be identified based on
                            business value and practical feasibility.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can digital transformation include custom software?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Custom software can be one component of a
                            broader transformation strategy when existing
                            technology does not adequately support the
                            organization's requirements.
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
        class="bg-brand-light"
        aria-labelledby="transformation-related-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2
                id="transformation-related-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Build your digital ecosystem.
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/website-development') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Website Development
                </a>

                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Software Development
                </a>

                <a
                    href="{{ url('/services/ui-ux-design') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    UI/UX Design
                </a>

                <a
                    href="{{ url('/services/data-analytics') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Data Analytics
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
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="transformation-cta-heading"
    >

        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Build For What's Next
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="transformation-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Ready to modernize your business?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Let's understand where your business is today and identify
                the digital opportunities that can move it forward.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Discuss Digital Transformation

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