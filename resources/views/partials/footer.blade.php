<footer class="relative overflow-hidden bg-[#17121b] text-white">

    {{-- =========================================================
         BACKGROUND GLOW
    ========================================================== --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-40 -top-40 h-[450px] w-[450px] rounded-full bg-brand-purple/20 blur-[110px]"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -bottom-40 -left-40 h-[400px] w-[400px] rounded-full bg-brand-red/10 blur-[110px]"
    ></div>


    <div class="relative mx-auto max-w-[1410px] px-6 sm:px-8 lg:px-10">


        {{-- =====================================================
             MAIN FOOTER
        ====================================================== --}}
        <div class="grid gap-14 py-16 sm:py-20 lg:grid-cols-[1.4fr_1fr_1fr_1fr] lg:gap-12 lg:py-24">


            {{-- =================================================
                 BRAND
            ================================================== --}}
            <div class="max-w-sm">

                <a
                    href="{{ url('/') }}"
                    aria-label="Techcrossbreed Home"
                    class="inline-flex items-center"
                >

                    {{-- Brand mark --}}
                    <div class="relative h-[46px] w-[46px] overflow-hidden">

                        <img
                            src="{{ asset('images/techcrossbreed-logo.png') }}"
                            alt=""
                            aria-hidden="true"
                            class="absolute left-1/2 top-0 h-auto w-full -translate-x-1/2"
                        >

                    </div>

                    <span class="ml-3 text-xl font-extrabold tracking-tight">

                        <span class="text-brand-red">
                            TECH
                        </span><span class="text-white">
                            CROSSBREED
                        </span>

                    </span>

                </a>


                <p class="mt-7 text-sm leading-7 text-white/55">
                    We build websites, software and digital solutions that
                    help businesses operate smarter, reach more customers
                    and grow with confidence.
                </p>


                {{-- Social links --}}
                <div class="mt-7 flex items-center gap-3">

                    <a
                        href="#"
                        aria-label="Techcrossbreed on LinkedIn"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-white/60 transition hover:border-brand-purple hover:bg-brand-purple hover:text-white"
                    >
                        <span class="text-sm font-bold">in</span>
                    </a>

                    <a
                        href="https://www.instagram.com/tech.crossbreed/"
                        aria-label="Techcrossbreed on Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-white/60 transition hover:border-brand-purple hover:bg-brand-purple hover:text-white"
                    >
                        <span class="text-sm font-bold">f</span>
                    </a>

                    <a
                        href="https://www.instagram.com/tech.crossbreed/"
                        aria-label="Techcrossbreed on Instagram"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 text-white/60 transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                    >
                        <span class="text-xs font-bold">IG</span>
                    </a>

                </div>

            </div>


            {{-- =================================================
                 COMPANY
            ================================================== --}}
            <div>

                <h2 class="text-sm font-bold uppercase tracking-[0.15em] text-white">
                    Company
                </h2>

                <nav
                    aria-label="Company navigation"
                    class="mt-6 flex flex-col gap-4"
                >

                    <a
                        href="{{ url('/about') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        About Us
                    </a>

                    <a
                        href="{{ url('/projects') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Projects
                    </a>

                    <a
                        href="{{ url('/blog') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Articles
                    </a>

                    <a
                        href="{{ url('/contact') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Contact
                    </a>

                </nav>

            </div>


            {{-- =================================================
                 SERVICES
            ================================================== --}}
            <div>

                <h2 class="text-sm font-bold uppercase tracking-[0.15em] text-white">
                    Services
                </h2>

                <nav
                    aria-label="Services navigation"
                    class="mt-6 flex flex-col gap-4"
                >

                    <a
                        href="{{ url('/services/website-development') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Website Development
                    </a>

                    <a
                        href="{{ url('/services/software-development') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Software Development
                    </a>

                    <a
                        href="{{ url('/services/ui-ux-design') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        UI/UX Design
                    </a>

                    <a
                        href="{{ url('/services/seo-services') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        SEO & Digital Growth
                    </a>

                    <a
                        href="{{ url('/services/data-analytics') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Data Analytics
                    </a>

                    <a
                        href="{{ url('/services/digital-transformation') }}"
                        class="text-sm text-white/55 transition hover:text-white"
                    >
                        Digital Transformation
                    </a>

                </nav>

            </div>


            {{-- =================================================
                 CONTACT
            ================================================== --}}
            <div>

                <h2 class="text-sm font-bold uppercase tracking-[0.15em] text-white">
                    Let's Talk
                </h2>

                <p class="mt-6 text-sm leading-6 text-white/55">
                    Have a project, idea or business challenge?
                    Let's discuss how technology can help.
                </p>


                <a
                    href="{{ url('/contact') }}"
                    class="mt-6 inline-flex items-center gap-3 text-sm font-bold text-white transition hover:text-brand-red"
                >

                    Start a Project

                    <span class="flex h-9 w-9 items-center justify-center rounded-full bg-brand-purple">

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

                    </span>

                </a>


                {{-- Contact information --}}
                <div class="mt-8 space-y-3">

                    <a
                        href="mailto:info@techcrossbreed.com.ng"
                        class="block text-sm text-white/55 transition hover:text-white"
                    >
                        info@techcrossbreed.com.ng
                    </a>

                    <a
                        href="tel:+2340000000000"
                        class="block text-sm text-white/55 transition hover:text-white"
                    >
                        +234 8120081213
                    </a>

                </div>

            </div>

        </div>


        {{-- =====================================================
             BOTTOM BAR
        ====================================================== --}}
        <div class="flex flex-col gap-5 border-t border-white/10 py-7 sm:flex-row sm:items-center sm:justify-between">

            <p class="text-xs text-white/40">
                &copy; {{ date('Y') }} Techcrossbreed. All rights reserved.
            </p>


            <div class="flex flex-wrap gap-6">

                <a
                    href="{{ url('/privacy-policy') }}"
                    class="text-xs text-white/40 transition hover:text-white"
                >
                    Privacy Policy
                </a>

                <a
                    href="{{ url('/terms') }}"
                    class="text-xs text-white/40 transition hover:text-white"
                >
                    Terms of Service
                </a>

                <a
                    href="{{ url('/sitemap.xml') }}"
                    class="text-xs text-white/40 transition hover:text-white"
                >
                    Sitemap
                </a>

            </div>

        </div>

    </div>

</footer>