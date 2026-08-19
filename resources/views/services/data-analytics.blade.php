@extends('layouts.app')

@section('title', 'Data Analytics Services | Business Intelligence & Dashboards | Techcrossbreed')

@section(
    'meta_description',
    'Techcrossbreed provides data analytics, business intelligence, dashboards and reporting solutions that help organizations turn business data into useful insights and better decisions.'
)

@section('canonical', url('/services/data-analytics'))

@section(
    'og_title',
    'Data Analytics & Business Intelligence Services | Techcrossbreed'
)

@section(
    'og_description',
    'Turn business data into clear insights with dashboards, reporting, analytics and business intelligence solutions from Techcrossbreed.'
)

@section('og_url', url('/services/data-analytics'))

@section(
    'twitter_title',
    'Data Analytics Services | Techcrossbreed'
)

@section(
    'twitter_description',
    'Business dashboards, reporting and data analytics solutions that help organizations understand performance and make better decisions.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="analytics-heading"
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
                            Data Analytics
                        </span>

                    </div>


                    <h1
                        id="analytics-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Turn your business data into better decisions.
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        We help organizations transform scattered business data
                        into meaningful dashboards, reports and insights that
                        make performance easier to understand and act upon.
                    </p>


                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="{{ url('/contact') }}"
                            class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                        >
                            Discuss Your Data Needs

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
                            href="#analytics-solutions"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore Analytics
                        </a>

                    </div>

                </div>


                {{-- Analytics visual --}}
                <div class="relative">

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-white/35">
                                        Business Intelligence
                                    </p>

                                    <p class="mt-2 text-xl font-bold text-white">
                                        Performance Dashboard
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
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 19V5m0 14h16"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m7 15 3-4 3 2 5-7"
                                        />

                                    </svg>

                                </div>

                            </div>


                            <div class="mt-8 grid grid-cols-2 gap-3">

                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[9px] uppercase tracking-wider text-white/30">
                                        Revenue
                                    </p>

                                    <div class="mt-3 h-6 w-16 rounded-lg bg-brand-purple/50"></div>

                                </div>


                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[9px] uppercase tracking-wider text-white/30">
                                        Performance
                                    </p>

                                    <div class="mt-3 h-6 w-20 rounded-lg bg-brand-red/40"></div>

                                </div>

                            </div>


                            <div class="mt-5 flex h-32 items-end gap-2 rounded-2xl bg-white/[0.04] p-5">

                                <span class="h-[30%] flex-1 rounded-t bg-brand-purple/20"></span>
                                <span class="h-[45%] flex-1 rounded-t bg-brand-purple/30"></span>
                                <span class="h-[38%] flex-1 rounded-t bg-brand-purple/40"></span>
                                <span class="h-[60%] flex-1 rounded-t bg-brand-purple/50"></span>
                                <span class="h-[52%] flex-1 rounded-t bg-brand-red/40"></span>
                                <span class="h-[76%] flex-1 rounded-t bg-brand-red/55"></span>
                                <span class="h-[88%] flex-1 rounded-t bg-brand-red/70"></span>

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
        aria-labelledby="analytics-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Data-Driven Business
                        </span>

                    </div>


                    <h2
                        id="analytics-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Data is more useful when you can understand it.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Businesses generate information every day through
                        operations, customers, sales, employees, finance and
                        other activities.
                    </p>

                    <p>
                        The challenge is often not having enough data. It is
                        turning that data into information that people can
                        understand and use.
                    </p>

                    <p>
                        We help organize, analyze and visualize business data
                        so decision-makers can see what is happening, identify
                        patterns and ask better questions.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         ANALYTICS SOLUTIONS
    ================================================================= --}}
    <section
        id="analytics-solutions"
        class="bg-brand-light"
        aria-labelledby="analytics-solutions-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        What We Provide
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="analytics-solutions-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Analytics solutions built around your questions.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    We focus on making important business information easier
                    to access, interpret and communicate.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @php
                    $analyticsServices = [
                        [
                            'number' => '01',
                            'title' => 'Business Dashboards',
                            'text' => 'Interactive dashboards that bring important performance indicators and business information together.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Data Visualization',
                            'text' => 'Clear visual representations that make trends, comparisons and patterns easier to understand.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Reporting',
                            'text' => 'Structured reports that turn operational information into useful summaries for teams and decision-makers.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Performance Analytics',
                            'text' => 'Analyze business performance and identify areas that require attention or improvement.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Data Integration',
                            'text' => 'Bring information from relevant sources together to create a more complete view of your business.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '06',
                            'title' => 'Decision Support',
                            'text' => 'Transform data into insights that help management and teams make more informed decisions.',
                            'color' => 'red',
                        ],
                    ];
                @endphp


                @foreach ($analyticsServices as $service)

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
         USE CASES
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="analytics-usecases-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Business Use Cases
                        </span>

                    </div>


                    <h2
                        id="analytics-usecases-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        See the information that matters to your organization.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        The right dashboard depends on what your organization
                        needs to monitor and understand.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Sales & Revenue
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Monitor sales activity, revenue trends and important commercial indicators.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            HR & Workforce
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Understand workforce information, attendance, tasks and people-related metrics.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Operations
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Track operational activity, workflows, service delivery and performance.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Management Reporting
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Give management a clearer view of important organizational information.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Marketing
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Understand website, campaign and digital marketing performance.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Project Tracking
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Track progress, activities, resources and project-related performance.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROCESS
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="analytics-process-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Our Process
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="analytics-process-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    From raw information to useful insight.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                @php
                    $steps = [
                        [
                            'number' => '01',
                            'title' => 'Understand',
                            'text' => 'Identify the business questions, goals, data sources and reporting requirements.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Prepare',
                            'text' => 'Organize and prepare relevant data so it can be analyzed effectively.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Analyze',
                            'text' => 'Explore the data, identify patterns and develop meaningful measures and insights.',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Visualize',
                            'text' => 'Present the information through dashboards and reports designed for the intended audience.',
                        ],
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
         BENEFITS
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="analytics-benefits-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        The Value
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="analytics-benefits-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Make information easier to act on.
                </h2>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <article class="rounded-[26px] border border-gray-200 bg-white p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Better Visibility
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        See important business information in one clearer view.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-white p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Faster Reporting
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Reduce the effort required to gather and communicate recurring information.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-white p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Better Questions
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Good visualization can reveal patterns and questions worth investigating.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-white p-7">

                    <h3 class="text-lg font-bold text-brand-dark">
                        Informed Decisions
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Give decision-makers clearer information to support planning and action.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         FAQ
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="analytics-faq-heading"
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
                    id="analytics-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Data analytics questions.
                </h2>

            </div>


            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            What is business data analytics?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Business data analytics involves examining business
                            information to identify useful patterns, trends,
                            relationships and insights that can support
                            decision-making.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you build dashboards for our organization?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Dashboard requirements can be designed around
                            the metrics, data sources, users and decisions that
                            matter to your organization.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you work with data from different sources?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Depending on the systems involved, data from
                            multiple relevant sources can be brought together
                            to provide a more complete view of performance.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-brand-light">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Do I need a large amount of data to benefit from analytics?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Not necessarily. The value depends more on the
                            questions you need answered and the quality and
                            relevance of the available information than simply
                            the volume of data.
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
        aria-labelledby="analytics-related-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2
                id="analytics-related-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Connect analytics with your digital systems.
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Software Development
                </a>

                <a
                    href="{{ url('/services/website-development') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Website Development
                </a>

                <a
                    href="{{ url('/services/digital-transformation') }}"
                    class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Digital Transformation
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
        aria-labelledby="analytics-cta-heading"
    >

        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Make Data Work
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="analytics-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Ready to turn your data into useful insight?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Tell us what information you have, what you need to understand
                and what decisions you want to improve.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Discuss Your Data Project

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