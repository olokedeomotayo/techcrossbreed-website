@extends('layouts.app')

@section('title', 'Contact Techcrossbreed | Start Your Digital Project')

@section(
    'meta_description',
    'Contact Techcrossbreed for website development, custom software, UI/UX design, SEO, data analytics and digital transformation services for businesses.'
)

@section('canonical', url('/contact'))

@section(
    'og_title',
    'Contact Techcrossbreed | Start Your Digital Project'
)

@section(
    'og_description',
    'Have a website, software or digital transformation project? Talk to Techcrossbreed about your business technology needs.'
)

@section('og_url', url('/contact'))

@section(
    'twitter_title',
    'Contact Techcrossbreed | Start Your Digital Project'
)

@section(
    'twitter_description',
    'Talk to Techcrossbreed about websites, software, SEO, UI/UX, data and digital transformation.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="contact-heading"
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

            <div class="max-w-3xl">

                <div class="mb-6 flex items-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Get In Touch
                    </span>

                </div>


                <h1
                    id="contact-heading"
                    class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                >
                    Let's build something that moves your business forward.
                </h1>


                <p class="mt-6 max-w-2xl text-base leading-8 text-white/60 sm:text-lg">
                    Whether you need a new website, custom software, better
                    digital experiences or help transforming your business,
                    we'd love to hear what you're working on.
                </p>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CONTACT + FORM
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="contact-form-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-20">

                {{-- ========================================================
                     CONTACT INFORMATION
                ========================================================= --}}
                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Contact Techcrossbreed
                        </span>

                    </div>


                    <h2
                        id="contact-form-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Tell us what you need.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        Give us a little information about your project and
                        we'll use it to understand how we can help.
                    </p>


                    <div class="mt-10 space-y-5">

                        {{-- Email --}}
                        <div class="flex gap-4 rounded-2xl border border-gray-200 bg-white p-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.6"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15A2.25 2.25 0 0 1 2.25 17.25V6.75A2.25 2.25 0 0 1 4.5 4.5h15a2.25 2.25 0 0 1 2.25 2.25Z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m3 6 7.94 6.177a1.75 1.75 0 0 0 2.12 0L21 6"
                                    />

                                </svg>

                            </div>


                            <div>

                                <p class="text-xs font-bold uppercase tracking-[0.15em] text-brand-gray">
                                    Email
                                </p>

                                <a
                                    href="mailto:info@techcrossbreed.com.ng"
                                    class="mt-1 block font-semibold text-brand-dark transition hover:text-brand-purple"
                                >
                                    info@techcrossbreed.com.ng
                                </a>

                            </div>

                        </div>


                        {{-- Phone --}}
                        <div class="flex gap-4 rounded-2xl border border-gray-200 bg-white p-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-red-light text-brand-red">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.6"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 6.75c0-1.243 1.007-2.25 2.25-2.25h2.5c.967 0 1.816.617 2.125 1.533l1.11 3.329a2.25 2.25 0 0 1-.94 2.59l-1.52 1.013a11.05 11.05 0 0 0 4.01 4.01l1.013-1.52a2.25 2.25 0 0 1 2.59-.94l3.329 1.11A2.25 2.25 0 0 1 20.25 17.75v2.5a2.25 2.25 0 0 1-2.25 2.25C9.716 22.5 1.5 14.284 1.5 4.5"
                                    />

                                </svg>

                            </div>


                            <div>

                                <p class="text-xs font-bold uppercase tracking-[0.15em] text-brand-gray">
                                    Phone
                                </p>

                                <a
                                    href="tel:+2348120081213"
                                    class="mt-1 block font-semibold text-brand-dark transition hover:text-brand-purple"
                                >
                                    +234 8120081213
                                </a>

                            </div>

                        </div>


                        {{-- Location --}}
                        <div class="flex gap-4 rounded-2xl border border-gray-200 bg-white p-5">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.6"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 10.5c0 5.25-7.5 10.5-7.5 10.5S4.5 15.75 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                    />

                                </svg>

                            </div>


                            <div>

                                <p class="text-xs font-bold uppercase tracking-[0.15em] text-brand-gray">
                                    Location
                                </p>

                                <p class="mt-1 font-semibold text-brand-dark">
                                    Nigeria
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ========================================================
                     FORM
                ========================================================= --}}
                <div class="rounded-[30px] border border-gray-200 bg-white p-7 shadow-sm sm:p-9">

                    <div class="mb-8">

                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-purple">
                            Project Enquiry
                        </p>


                        <h2 class="mt-2 text-2xl font-bold text-brand-dark">
                            Start a conversation
                        </h2>


                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Complete the form and tell us about your project.
                        </p>

                    </div>

                    
                    {{-- Form --}}

                    @if (session('success'))
                        <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 text-sm font-medium text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif
                   <form
                    action="{{ route('contact.submit') }}"
                    method="POST"
                    class="space-y-6"
                >

                        @csrf


                        <div class="grid gap-5 sm:grid-cols-2">

                            <div>

                                <label
                                    for="name"
                                    class="mb-2 block text-sm font-bold text-brand-dark"
                                >
                                    Full Name
                                </label>

                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    autocomplete="name"
                                    required
                                    placeholder="Your name"
                                    class="w-full rounded-xl border border-gray-200 bg-brand-light px-4 py-3.5 text-sm text-brand-dark outline-none transition placeholder:text-gray-400 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/10"
                                >

                            </div>


                            <div>

                                <label
                                    for="email"
                                    class="mb-2 block text-sm font-bold text-brand-dark"
                                >
                                    Email Address
                                </label>

                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    required
                                    placeholder="you@example.com"
                                    class="w-full rounded-xl border border-gray-200 bg-brand-light px-4 py-3.5 text-sm text-brand-dark outline-none transition placeholder:text-gray-400 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/10"
                                >

                            </div>

                        </div>


                        <div>

                            <label
                                for="company"
                                class="mb-2 block text-sm font-bold text-brand-dark"
                            >
                                Company / Organization
                            </label>

                            <input
                                id="company"
                                name="company"
                                type="text"
                                autocomplete="organization"
                                placeholder="Company name"
                                class="w-full rounded-xl border border-gray-200 bg-brand-light px-4 py-3.5 text-sm text-brand-dark outline-none transition placeholder:text-gray-400 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/10"
                            >

                        </div>


                        <div>

                            <label
                                for="service"
                                class="mb-2 block text-sm font-bold text-brand-dark"
                            >
                                What do you need?
                            </label>

                            <select
                                id="service"
                                name="service"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-brand-light px-4 py-3.5 text-sm text-brand-dark outline-none transition focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/10"
                            >

                                <option value="">
                                    Select a service
                                </option>

                                <option value="website-development">
                                    Website Development
                                </option>

                                <option value="software-development">
                                    Software Development
                                </option>

                                <option value="ui-ux-design">
                                    UI/UX Design
                                </option>

                                <option value="seo">
                                    SEO & Digital Growth
                                </option>

                                <option value="data-analytics">
                                    Data Analytics
                                </option>

                                <option value="digital-transformation">
                                    Digital Transformation
                                </option>

                                <option value="other">
                                    Other
                                </option>

                            </select>

                        </div>


                        <div>

                            <label
                                for="budget"
                                class="mb-2 block text-sm font-bold text-brand-dark"
                            >
                                Estimated Budget
                            </label>

                            <select
                                id="budget"
                                name="budget"
                                class="w-full rounded-xl border border-gray-200 bg-brand-light px-4 py-3.5 text-sm text-brand-dark outline-none transition focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/10"
                            >

                                <option value="">
                                    Select a budget range
                                </option>

                                <option value="under-500k">
                                    Under ₦500,000
                                </option>

                                <option value="500k-1m">
                                    ₦500,000 – ₦1,000,000
                                </option>

                                <option value="1m-3m">
                                    ₦1,000,000 – ₦3,000,000
                                </option>

                                <option value="3m-5m">
                                    ₦3,000,000 – ₦5,000,000
                                </option>

                                <option value="5m-plus">
                                    ₦5,000,000+
                                </option>

                                <option value="not-sure">
                                    I'm not sure yet
                                </option>

                            </select>

                        </div>


                        <div>

                            <label
                                for="message"
                                class="mb-2 block text-sm font-bold text-brand-dark"
                            >
                                Tell us about your project
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                placeholder="Tell us what you're trying to build, improve or achieve..."
                                class="w-full resize-none rounded-xl border border-gray-200 bg-brand-light px-4 py-3.5 text-sm leading-6 text-brand-dark outline-none transition placeholder:text-gray-400 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/10"
                            ></textarea>

                        </div>


                        <button
                            type="submit"
                            class="group inline-flex w-full items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-lg shadow-brand-purple/20 transition hover:-translate-y-0.5 hover:bg-brand-purple-dark"
                        >

                            Send Project Enquiry

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

                        </button>


                        <p class="text-center text-xs leading-5 text-brand-gray">
                            Your information will only be used to respond to your enquiry.
                        </p>

                    </form>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         WHY CONTACT US
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="contact-benefits-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Why Techcrossbreed
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="contact-benefits-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    More than a service provider.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    We approach every project around your actual business
                    objectives, not just the technology.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-3">

                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-purple">
                        01
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Business First
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-brand-gray">
                        We focus on what the technology needs to accomplish for your business.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-red">
                        02
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Practical Solutions
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-brand-gray">
                        We build solutions designed around real operational needs.
                    </p>

                </article>


                <article class="rounded-[26px] border border-gray-200 bg-brand-light p-7">

                    <span class="text-xs font-black text-brand-purple">
                        03
                    </span>

                    <h3 class="mt-5 text-lg font-bold text-brand-dark">
                        Long-Term Thinking
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-brand-gray">
                        We consider how your digital infrastructure can grow with your organization.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         FAQ
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="contact-faq-heading"
    >

        <div class="mx-auto max-w-[950px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Frequently Asked Questions
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="contact-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Before you contact us.
                </h2>

            </div>


            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-gray-200 bg-white">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark">

                        <span>
                            What happens after I submit an enquiry?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6">

                        <p class="text-sm leading-7 text-brand-gray">
                            We'll review the information you provide and use
                            it to understand your project requirements and
                            determine the most appropriate next step.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark">

                        <span>
                            Do you work with businesses outside Nigeria?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Digital services such as website development,
                            software development, UI/UX, SEO and data solutions
                            can be delivered remotely depending on the project.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark">

                        <span>
                            Can you work with an existing website or system?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Depending on the technology and condition of
                            the existing system, we can help improve, redesign,
                            optimize or extend it.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark">

                        <span>
                            Do I need to know exactly what technology I need?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6">

                        <p class="text-sm leading-7 text-brand-gray">
                            No. You can start by explaining the business
                            problem or outcome you're trying to achieve.
                            We'll help identify an appropriate technology approach.
                        </p>

                    </div>

                </details>

            </div>

        </div>

    </section>


    {{-- ================================================================
         FINAL CTA
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="contact-final-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Let's Work Together
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="contact-final-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Your next digital project starts with a conversation.
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Tell us what you're trying to achieve and let's explore
                what's possible.
            </p>

        </div>

    </section>

@endsection