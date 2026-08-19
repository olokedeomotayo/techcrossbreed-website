@extends('layouts.app')

@section('title', 'SEO & Digital Growth Services | Grow Your Online Visibility | Techcrossbreed')

@section(
    'meta_description',
    'Techcrossbreed provides SEO and digital growth services that improve search visibility, attract relevant visitors and help businesses build sustainable online growth.'
)

@section('canonical', url('/services/seo-digital-growth'))

@section(
    'og_title',
    'SEO & Digital Growth Services | Techcrossbreed'
)

@section(
    'og_description',
    'Improve your online visibility with SEO, content strategy, technical optimization and digital growth solutions built around your business goals.'
)

@section('og_url', url('/services/seo-digital-growth'))

@section(
    'og_image_alt',
    'Techcrossbreed SEO and digital growth services'
)

@section(
    'twitter_title',
    'SEO & Digital Growth Services | Techcrossbreed'
)

@section(
    'twitter_description',
    'SEO and digital growth strategies designed to improve visibility, attract relevant traffic and support long-term business growth.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="seo-heading"
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
                            SEO & Digital Growth
                        </span>

                    </div>


                    <h1
                        id="seo-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Get found by the people looking for your business.
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        We help businesses improve their search visibility,
                        attract relevant visitors and build a stronger digital
                        presence through practical SEO and growth strategies.
                    </p>


                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="{{ url('/contact') }}"
                            class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                        >
                            Grow Your Online Presence

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
                            href="#seo-services"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore SEO Services
                        </a>

                    </div>

                </div>


                {{-- SEO visual --}}
                <div class="relative">

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-white/35">
                                        Search Visibility
                                    </p>

                                    <p class="mt-2 text-xl font-bold text-white">
                                        Growth Overview
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
                                        <circle cx="11" cy="11" r="6.5"></circle>

                                        <path
                                            stroke-linecap="round"
                                            d="m16 16 4 4"
                                        />

                                    </svg>

                                </div>

                            </div>


                            <div class="mt-8 grid grid-cols-3 gap-3">

                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[9px] uppercase tracking-wider text-white/30">
                                        Visibility
                                    </p>

                                    <div class="mt-3 h-6 w-12 rounded-lg bg-brand-purple/50"></div>

                                </div>


                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[9px] uppercase tracking-wider text-white/30">
                                        Traffic
                                    </p>

                                    <div class="mt-3 h-6 w-14 rounded-lg bg-brand-red/40"></div>

                                </div>


                                <div class="rounded-2xl bg-white/[0.05] p-4">

                                    <p class="text-[9px] uppercase tracking-wider text-white/30">
                                        Leads
                                    </p>

                                    <div class="mt-3 h-6 w-10 rounded-lg bg-brand-purple/30"></div>

                                </div>

                            </div>


                            <div class="mt-5 flex h-32 items-end gap-2 rounded-2xl bg-white/[0.04] p-5">

                                <span class="h-[25%] flex-1 rounded-t bg-brand-purple/20"></span>
                                <span class="h-[35%] flex-1 rounded-t bg-brand-purple/30"></span>
                                <span class="h-[30%] flex-1 rounded-t bg-brand-purple/40"></span>
                                <span class="h-[50%] flex-1 rounded-t bg-brand-purple/50"></span>
                                <span class="h-[65%] flex-1 rounded-t bg-brand-purple/60"></span>
                                <span class="h-[78%] flex-1 rounded-t bg-brand-red/50"></span>
                                <span class="h-[90%] flex-1 rounded-t bg-brand-red/70"></span>

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
        aria-labelledby="seo-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Search & Growth
                        </span>

                    </div>


                    <h2
                        id="seo-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Visibility is valuable when it reaches the right audience.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Being online is only the beginning. Your website needs
                        to be discoverable when potential customers search for
                        products, services and solutions related to your business.
                    </p>

                    <p>
                        Our approach to SEO combines technical foundations,
                        useful content, on-page optimization, site structure
                        and ongoing improvement.
                    </p>

                    <p>
                        We focus on sustainable visibility rather than
                        shortcuts, helping your website become more useful to
                        both search engines and the people you want to reach.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SEO SERVICES
    ================================================================= --}}
    <section
        id="seo-services"
        class="bg-brand-light"
        aria-labelledby="seo-services-heading"
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
                    id="seo-services-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A practical SEO foundation for long-term growth.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    SEO involves multiple connected areas. We work across the
                    parts that can make the biggest difference to your website.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">


                @php
                    $seoServices = [
                        [
                            'number' => '01',
                            'title' => 'Technical SEO',
                            'text' => 'Improve the technical foundations that help search engines crawl, understand and index your website.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '02',
                            'title' => 'On-Page SEO',
                            'text' => 'Optimize page titles, headings, content structure, internal links and other on-page elements.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Keyword Strategy',
                            'text' => 'Identify relevant search topics and opportunities that align with your audience and business goals.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Content Strategy',
                            'text' => 'Create useful content opportunities that answer customer questions and strengthen topical relevance.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Local SEO',
                            'text' => 'Improve online visibility for businesses that serve customers within specific locations and markets.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '06',
                            'title' => 'SEO Audits',
                            'text' => 'Review your website to identify technical, content, structural and optimization opportunities.',
                            'color' => 'red',
                        ],
                    ];
                @endphp


                @foreach ($seoServices as $service)

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
         SEO FOUNDATIONS
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="seo-foundations-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            What We Focus On
                        </span>

                    </div>


                    <h2
                        id="seo-foundations-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        SEO that supports the whole website.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        Search optimization works best when it is part of the
                        wider digital strategy rather than an afterthought.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Search Intent
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Content should match what people actually want to find and accomplish.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Useful Content
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Create content that answers real questions and demonstrates expertise.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Technical Foundation
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Keep the site technically accessible, structured and performant.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Internal Linking
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Connect related pages so users and search engines can discover your content.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Mobile Experience
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Make important content and actions accessible across modern devices.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Measurement
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Use meaningful data to understand performance and identify opportunities.
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
        aria-labelledby="seo-process-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Our SEO Process
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="seo-process-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    Build, optimize, measure and improve.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                @php
                    $steps = [
                        [
                            'number' => '01',
                            'title' => 'Audit',
                            'text' => 'Understand the current website, content, technical foundation and search opportunities.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Strategy',
                            'text' => 'Prioritize keywords, content, technical improvements and growth opportunities.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Optimize',
                            'text' => 'Implement improvements across pages, content, structure and technical SEO.',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Measure',
                            'text' => 'Review performance, learn from results and identify the next opportunities.',
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
         FAQ
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="seo-faq-heading"
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
                    id="seo-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    SEO questions.
                </h2>

            </div>


            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            How long does SEO take to produce results?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            SEO is a long-term process and results can vary
                            depending on competition, website history,
                            industry, content quality and the improvements
                            being implemented. There is no responsible
                            one-size-fits-all timeline.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you do SEO for a new website?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Starting SEO early allows the website structure,
                            content and technical foundation to be developed
                            with search visibility in mind.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Do you guarantee first-page Google rankings?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            No responsible SEO provider can guarantee specific
                            Google rankings. Search results depend on many
                            factors outside any one provider's control. We focus
                            instead on building strong foundations and improving
                            measurable search performance.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can SEO and website development be done together?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. In fact, integrating SEO into website planning
                            and development can provide a stronger technical,
                            content and structural foundation from the start.
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
        aria-labelledby="seo-related-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2
                id="seo-related-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Turn visibility into a stronger digital presence.
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

            </div>

        </div>

    </section>


    {{-- ================================================================
         CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="seo-cta-heading"
    >

        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Grow With Search
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="seo-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Ready to improve your online visibility?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Let's look at where your website is today and identify
                practical opportunities for growth.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Start an SEO Conversation

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