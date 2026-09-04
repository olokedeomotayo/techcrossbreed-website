@extends('layouts.app')

@section('title', 'you Human Resources Management System | HRMS Project | Techcrossbreed')

@section(
    'meta_description',
    'Explore the you Human Resources Management System developed by Techcrossbreed to streamline employee management, HR workflows, daily tasks, leave processes and organizational operations.'
)

@section('canonical', url('/projects/you-hrms'))

@section(
    'og_title',
    'you Human Resources Management System | Techcrossbreed'
)

@section(
    'og_description',
    'A custom HR management platform designed and developed by Techcrossbreed to streamline workforce administration and HR operations.'
)

@section('og_url', url('/projects/you-hrms'))

@section(
    'twitter_title',
    'you Human Resources Management System | Techcrossbreed'
)

@section(
    'twitter_description',
    'Explore the custom HRMS developed by Techcrossbreed for employee management, workflows, tasks and HR operations.'
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
                        Breed HRMS
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
        aria-labelledby="hrms-heading"
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
                            Custom Software
                        </span>

                    </div>


                    <h1
                        id="hrms-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Human Resources Management System
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-8 text-white/60 sm:text-lg">
                        A centralized HR management platform designed to
                        simplify employee administration, workforce workflows,
                        daily task reporting and other people-related processes.
                    </p>


                    <div class="mt-8 flex flex-wrap gap-3">

                        <span class="rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-bold text-white">
                            HR Management
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-bold text-white">
                            Custom Software
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/[0.05] px-4 py-2 text-xs font-bold text-white">
                            Laravel
                        </span>

                    </div>

                </div>


                <div>

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-5 sm:p-7">

                            <div class="flex gap-4">

                                <div class="w-1/4 rounded-2xl bg-white/[0.04] p-3">

                                    <div class="h-7 rounded-lg bg-brand-purple/20"></div>

                                    <div class="mt-5 space-y-3">

                                        <div class="h-2 rounded bg-white/10"></div>
                                        <div class="h-2 rounded bg-white/10"></div>
                                        <div class="h-2 rounded bg-brand-purple/20"></div>
                                        <div class="h-2 rounded bg-white/10"></div>

                                    </div>

                                </div>


                                <div class="flex-1">

                                    <div class="flex items-center justify-between">

                                        <div class="h-7 w-32 rounded-lg bg-white/[0.06]"></div>

                                        <div class="h-8 w-8 rounded-lg bg-brand-red/20"></div>

                                    </div>


                                    <div class="mt-5 grid grid-cols-3 gap-3">

                                        <div class="h-20 rounded-xl bg-brand-purple/15"></div>
                                        <div class="h-20 rounded-xl bg-white/[0.05]"></div>
                                        <div class="h-20 rounded-xl bg-brand-red/10"></div>

                                    </div>


                                    <div class="mt-4 h-28 rounded-2xl bg-white/[0.04]"></div>

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
                        you
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
                        HR Management System
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
        aria-labelledby="hrms-overview-heading"
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
                        id="hrms-overview-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Bringing HR processes into one digital platform.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Managing employee information and HR activities across
                        disconnected processes can make administration slower
                        and make organizational information harder to access.
                    </p>

                    <p>
                        Techcrossbreed developed a centralized Human Resources
                        Management System for you to provide a structured
                        digital environment for employee and workforce-related
                        activities.
                    </p>

                    <p>
                        The platform brings important HR workflows together
                        while providing a foundation for additional HR and
                        organizational capabilities.
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
        aria-labelledby="hrms-challenge-heading"
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
                        id="hrms-challenge-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Making people operations more organized and accessible.
                    </h2>

                </div>


                <div class="space-y-4">

                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Employee Information
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Provide a centralized environment for managing
                            employee-related information.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Daily Task Reporting
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Create a structured way for employees to submit
                            and report daily work activities.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Leave & Permission Workflows
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Digitize employee requests and approval processes
                            within the organization.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-white p-6">

                        <h3 class="font-bold text-brand-dark">
                            Management Visibility
                        </h3>

                        <p class="mt-2 text-sm leading-7 text-brand-gray">
                            Give authorized users a clearer view of workforce
                            information and organizational activities.
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
        aria-labelledby="hrms-solution-heading"
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
                    id="hrms-solution-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A centralized HR platform for everyday workforce management.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                    The system was designed around practical HR workflows and
                    the information employees, managers and HR administrators
                    need to perform their roles effectively.
                </p>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @php
                    $features = [
                        [
                            'number' => '01',
                            'title' => 'Employee Management',
                            'text' => 'Centralized employee records and workforce information.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Role-Based Access',
                            'text' => 'Different users can access the areas and functions relevant to their responsibilities.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Daily Task Reports',
                            'text' => 'Employees can submit structured daily task and activity reports.',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Leave Requests',
                            'text' => 'Digitized leave request and approval workflows.',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Permission Requests',
                            'text' => 'Structured permission workflows for employee requests and approvals.',
                        ],
                        [
                            'number' => '06',
                            'title' => 'HR Administration',
                            'text' => 'A centralized environment for managing important HR activities.',
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
         USER EXPERIENCE
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="hrms-users-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            Designed For Teams
                        </span>

                    </div>


                    <h2
                        id="hrms-users-heading"
                        class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                    >
                        Different users. Different responsibilities. One platform.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-white/50 sm:text-lg">
                        The system structure allows HR activities to be
                        organized around the responsibilities of employees,
                        managers and administrators.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-3">

                    <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                        <span class="text-xs font-black text-brand-purple">
                            01
                        </span>

                        <h3 class="mt-5 font-bold text-white">
                            Employees
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/40">
                            Access relevant HR services, submit tasks and make requests.
                        </p>

                    </article>


                    <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                        <span class="text-xs font-black text-brand-red">
                            02
                        </span>

                        <h3 class="mt-5 font-bold text-white">
                            Managers
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/40">
                            Review relevant employee activities and workflow requests.
                        </p>

                    </article>


                    <article class="rounded-[24px] border border-white/10 bg-white/[0.04] p-6">

                        <span class="text-xs font-black text-brand-purple">
                            03
                        </span>

                        <h3 class="mt-5 font-bold text-white">
                            HR
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-white/40">
                            Manage employee information and HR administration.
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
        class="bg-brand-light"
        aria-labelledby="hrms-technology-heading"
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
                        id="hrms-technology-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Built for a scalable digital workplace.
                    </h2>

                </div>


                <div class="flex flex-wrap gap-3">

                    <span class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark">
                        Laravel
                    </span>

                    <span class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark">
                        PHP
                    </span>

                    <span class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark">
                        Tailwind CSS
                    </span>

                    <span class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark">
                        JavaScript
                    </span>

                    <span class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark">
                        MySQL
                    </span>

                    <span class="rounded-full border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-brand-dark">
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
        class="bg-white"
        aria-labelledby="hrms-preview-heading"
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
                    id="hrms-preview-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Inside the HR management platform.
                </h2>


                <p class="mt-5 text-base leading-7 text-brand-gray">
                    Screenshots of the actual HRMS interface can be added here
                    as the project portfolio assets are prepared.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-2">

                <div class="aspect-[16/10] rounded-[28px] border border-gray-200 bg-brand-light p-5">

                    <div class="flex h-full items-center justify-center rounded-[20px] bg-[#211a25]">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/30">
                            HRMS Dashboard
                        </p>

                    </div>

                </div>


                <div class="aspect-[16/10] rounded-[28px] border border-gray-200 bg-brand-light p-5">

                    <div class="flex h-full items-center justify-center rounded-[20px] bg-[#211a25]">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/30">
                            Employee Management
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
        class="bg-brand-light"
        aria-labelledby="hrms-outcome-heading"
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
                    id="hrms-outcome-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    A more connected approach to HR operations.
                </h2>


                <p class="mt-5 text-base leading-8 text-brand-gray sm:text-lg">
                    The HRMS provides you with a structured digital
                    foundation for managing people-related activities and
                    continuing the organization's broader digital transformation.
                </p>

            </div>


            <div class="mt-12 grid gap-5 md:grid-cols-3">

                <div class="rounded-[26px] border border-gray-200 bg-white p-7 text-center">

                    <p class="text-3xl font-black text-brand-purple">
                        01
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Centralized HR
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Important workforce information and activities brought into one platform.
                    </p>

                </div>


                <div class="rounded-[26px] border border-gray-200 bg-white p-7 text-center">

                    <p class="text-3xl font-black text-brand-red">
                        02
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Digital Workflows
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Structured employee requests and organizational processes.
                    </p>

                </div>


                <div class="rounded-[26px] border border-gray-200 bg-white p-7 text-center">

                    <p class="text-3xl font-black text-brand-purple">
                        03
                    </p>

                    <h3 class="mt-3 font-bold text-brand-dark">
                        Scalable Foundation
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        A foundation for expanding digital HR capabilities over time.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         RELATED SERVICES
    ================================================================= --}}
    <section class="bg-white">

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl">
                Need a custom business system?
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Software Development
                </a>

                <a
                    href="{{ url('/services/digital-transformation') }}"
                    class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Digital Transformation
                </a>

                <a
                    href="{{ url('/services/data-analytics') }}"
                    class="rounded-full border border-gray-200 bg-brand-light px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
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
        aria-labelledby="hrms-cta-heading"
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
                id="hrms-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Need a system built around your business?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                We can help turn your business processes into a structured
                digital system designed around how your organization works.
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