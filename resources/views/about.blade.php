@extends('layouts.app')

@section('title', 'About Techcrossbreed | Digital Solutions for Growing Businesses')

@section(
    'meta_description',
    'Learn about Techcrossbreed, a technology and digital solutions company helping businesses build better websites, software, digital experiences and smarter technology systems.'
)

@section('canonical', url('/about'))

@section(
    'og_title',
    'About Techcrossbreed | Digital Solutions for Growing Businesses'
)

@section(
    'og_description',
    'Discover Techcrossbreed and our approach to building practical digital solutions that help businesses grow, operate smarter and transform.'
)

@section('og_url', url('/about'))

@section(
    'og_image_alt',
    'About Techcrossbreed — Digital Solutions for Businesses'
)

@section(
    'twitter_title',
    'About Techcrossbreed | Digital Solutions for Growing Businesses'
)

@section(
    'twitter_description',
    'Discover how Techcrossbreed combines technology, creativity and business thinking to build practical digital solutions.'
)

@section('content')

    {{-- ================================================================
         ABOUT HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="about-hero-heading"
    >

        {{-- Background glow --}}
        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-brand-purple/25 blur-[120px]"
        ></div>

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -left-40 bottom-0 h-[400px] w-[400px] rounded-full bg-brand-red/15 blur-[110px]"
        ></div>


        <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">


                {{-- Hero content --}}
                <div>

                    <div class="mb-6 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            About Techcrossbreed
                        </span>

                    </div>


                    <h1
                        id="about-hero-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Technology built around your business.
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        Techcrossbreed helps businesses turn ideas, challenges
                        and opportunities into practical digital solutions
                        that create real value.
                    </p>


                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

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
                            href="#our-story"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Our Story
                        </a>

                    </div>

                </div>


                {{-- Hero visual --}}
                <div class="relative">

                    <div class="relative overflow-hidden rounded-[34px] border border-white/10 bg-white/[0.04] p-6 shadow-2xl sm:p-8">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-white/35">
                                        Our Focus
                                    </p>

                                    <p class="mt-2 text-xl font-bold text-white">
                                        Business + Technology
                                    </p>

                                </div>


                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-purple/20 text-brand-purple">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.6"
                                        stroke="currentColor"
                                        class="h-6 w-6"
                                    >
                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="8.25"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.75 12h16.5M12 3.75v16.5"
                                        />

                                    </svg>

                                </div>

                            </div>


                            <div class="mt-10 grid grid-cols-2 gap-3">

                                <div class="rounded-2xl border border-white/10 bg-white/[0.035] p-5">

                                    <div class="h-10 w-10 rounded-xl bg-brand-purple/20"></div>

                                    <p class="mt-4 text-sm font-bold text-white">
                                        Strategy
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-white/35">
                                        Understand the real business need.
                                    </p>

                                </div>


                                <div class="rounded-2xl border border-white/10 bg-white/[0.035] p-5">

                                    <div class="h-10 w-10 rounded-xl bg-brand-red/20"></div>

                                    <p class="mt-4 text-sm font-bold text-white">
                                        Design
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-white/35">
                                        Create useful digital experiences.
                                    </p>

                                </div>


                                <div class="rounded-2xl border border-white/10 bg-white/[0.035] p-5">

                                    <div class="h-10 w-10 rounded-xl bg-brand-red/20"></div>

                                    <p class="mt-4 text-sm font-bold text-white">
                                        Technology
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-white/35">
                                        Build reliable digital solutions.
                                    </p>

                                </div>


                                <div class="rounded-2xl border border-white/10 bg-white/[0.035] p-5">

                                    <div class="h-10 w-10 rounded-xl bg-brand-purple/20"></div>

                                    <p class="mt-4 text-sm font-bold text-white">
                                        Growth
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-white/35">
                                        Improve and scale over time.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         OUR STORY
    ================================================================= --}}
    <section
        id="our-story"
        class="relative overflow-hidden bg-white"
        aria-labelledby="our-story-heading"
    >

        <div class="relative mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Our Story
                        </span>

                    </div>

                    <h2
                        id="our-story-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        We believe technology should solve real problems.
                    </h2>

                </div>


                <div class="space-y-6 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Techcrossbreed was built around a simple idea:
                        businesses should be able to use technology as a
                        practical tool for growth, efficiency and better
                        customer experiences.
                    </p>

                    <p>
                        We combine business thinking, design and technology
                        to create digital solutions that are useful,
                        scalable and aligned with the way organizations
                        actually work.
                    </p>

                    <p>
                        From professional websites and custom software to
                        SEO, data analytics and digital transformation,
                        our approach starts with understanding the problem
                        before deciding on the technology.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         VISION & MISSION
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-brand-light"
        aria-labelledby="vision-mission-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        What Drives Us
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>

                <h2
                    id="vision-mission-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Our vision and mission.
                </h2>

            </div>


            <div class="mt-12 grid gap-6 lg:grid-cols-2">


                {{-- Vision --}}
                <article class="rounded-[30px] bg-[#17121b] p-8 text-white shadow-xl sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#c98bd0]">
                        Our Vision
                    </span>

                    <h3 class="mt-7 text-2xl font-bold sm:text-3xl">
                        To empower businesses through technology.
                    </h3>

                    <p class="mt-5 text-sm leading-7 text-white/55 sm:text-base">
                        We envision a future where businesses can use
                        accessible, intelligent and reliable technology to
                        compete, innovate and grow.
                    </p>

                </article>


                {{-- Mission --}}
                <article class="rounded-[30px] border border-gray-200 bg-white p-8 shadow-sm sm:p-10">

                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-brand-red">
                        Our Mission
                    </span>

                    <h3 class="mt-7 text-2xl font-bold text-brand-dark sm:text-3xl">
                        Build technology that creates real value.
                    </h3>

                    <p class="mt-5 text-sm leading-7 text-brand-gray sm:text-base">
                        Our mission is to combine strategy, creativity and
                        technology to deliver practical digital solutions
                        that help organizations improve efficiency, connect
                        with customers and achieve measurable objectives.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         OUR VALUES
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="values-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="max-w-3xl">

                <div class="mb-5 flex items-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Our Values
                    </span>

                </div>

                <h2
                    id="values-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    The principles behind our work.
                </h2>

                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    Our work is guided by a commitment to practical solutions,
                    thoughtful design and technology that delivers lasting
                    value.
                </p>

            </div>


            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">


                @php
                    $values = [
                        [
                            'title' => 'Innovation',
                            'text' => 'We explore better ways to solve problems and create useful digital experiences.',
                            'accent' => 'purple',
                        ],
                        [
                            'title' => 'Integrity',
                            'text' => 'We believe in honest communication, responsible technology and doing what is right.',
                            'accent' => 'red',
                        ],
                        [
                            'title' => 'Excellence',
                            'text' => 'We pursue quality in strategy, design, development and delivery.',
                            'accent' => 'purple',
                        ],
                        [
                            'title' => 'Partnership',
                            'text' => 'We work collaboratively with clients to understand their goals and build together.',
                            'accent' => 'red',
                        ],
                    ];
                @endphp


                @foreach ($values as $value)

                    <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl
                            {{ $value['accent'] === 'purple' ? 'bg-brand-purple-light text-brand-purple' : 'bg-brand-red-light text-brand-red' }}"
                        >

                            <span class="text-lg font-black">
                                {{ substr($value['title'], 0, 1) }}
                            </span>

                        </div>

                        <h3 class="mt-6 text-lg font-bold text-brand-dark">
                            {{ $value['title'] }}
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            {{ $value['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ================================================================
         WHY TECHCROSSBREED
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="about-why-heading"
    >

        <div
            aria-hidden="true"
            class="absolute -left-40 top-0 h-[450px] w-[450px] rounded-full bg-brand-purple/20 blur-[120px]"
        ></div>

        <div class="relative mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            Why Techcrossbreed
                        </span>

                    </div>

                    <h2
                        id="about-why-heading"
                        class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                    >
                        We start with the problem, not the technology.
                    </h2>

                    <p class="mt-5 text-base leading-7 text-white/55 sm:text-lg sm:leading-8">
                        The best digital solution isn't necessarily the one
                        with the most technology. It's the one that solves
                        the right problem effectively.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Business-focused
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We align technology with measurable business goals.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Custom solutions
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We build around your processes and requirements.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Modern technology
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We use modern tools and development practices.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6">

                        <h3 class="font-bold text-white">
                            Long-term thinking
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/45">
                            We design solutions that can evolve with your business.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SERVICES LINK
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-white"
        aria-labelledby="about-services-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                What We Do
            </p>

            <h2
                id="about-services-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Explore our digital solutions.
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-brand-gray">
                From websites and software to SEO, analytics and digital
                transformation, we help businesses use technology to move
                forward.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">

                <a
                    href="{{ url('/services') }}"
                    class="inline-flex items-center justify-center rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white transition hover:bg-brand-purple-dark"
                >
                    Explore Our Services
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="inline-flex items-center justify-center rounded-full border border-gray-200 px-7 py-3.5 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Talk to Us
                </a>

            </div>

        </div>

    </section>


    {{-- ================================================================
         ABOUT PAGE CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-brand-light"
        aria-labelledby="about-cta-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-purple-light text-brand-purple">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.7"
                    stroke="currentColor"
                    class="h-7 w-7"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 3.75v16.5M3.75 12h16.5"
                    />

                    <circle
                        cx="12"
                        cy="12"
                        r="8.25"
                    />

                </svg>

            </div>


            <h2
                id="about-cta-heading"
                class="mt-6 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Have a business challenge to solve?
            </h2>


            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-brand-gray">
                Let's explore how the right digital solution can help your
                business operate better, reach more customers and grow.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-8 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-lg shadow-brand-purple/15 transition hover:-translate-y-0.5 hover:bg-brand-purple-dark"
            >
                Start a Conversation

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