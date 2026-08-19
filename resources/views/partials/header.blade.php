<header
    x-data="{ open: false, scrolled: false }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 15
        })
    "
    :class="scrolled
        ? 'bg-white/95 shadow-sm backdrop-blur-md'
        : 'bg-white'"
    class="sticky top-0 z-50 border-b border-gray-100 transition-all duration-300"
>
    <div class="mx-auto max-w-[1410px] px-6 sm:px-8 lg:px-10">

        <div class="flex h-[92px] items-center justify-between lg:h-[108px]">

            {{-- =====================================================
                 LOGO
            ====================================================== --}}
            <a
                href="{{ url('/') }}"
                aria-label="Techcrossbreed Home"
                class="flex shrink-0 items-center"
            >

                {{-- Brand mark --}}
                <div class="relative h-[48px] w-[48px] overflow-hidden sm:h-[52px] sm:w-[52px]">

                    <img
                        src="{{ asset('images/techcrossbreed-logo.png') }}"
                        alt=""
                        aria-hidden="true"
                        class="absolute left-1/2 top-0 h-auto w-[100%] -translate-x-1/2"
                    >

                </div>

                {{-- Brand name --}}
                <span class="ml-3 whitespace-nowrap text-[18px] font-extrabold tracking-[-0.02em] text-brand-dark sm:text-[20px]">
                    <span class="text-brand-red">TECH</span><span class="text-brand-purple">CROSSBREED</span>
                </span>

            </a>


            {{-- =====================================================
                 DESKTOP NAVIGATION
            ====================================================== --}}
            <nav
                aria-label="Primary navigation"
                class="hidden items-center gap-8 lg:flex xl:gap-9"
            >

                <a
                    href="{{ url('/') }}"
                    class="text-[15px] font-medium text-brand-purple transition hover:text-brand-red"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="text-[15px] font-medium text-brand-dark transition hover:text-brand-purple"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="text-[15px] font-medium text-brand-dark transition hover:text-brand-purple"
                >
                    Services
                </a>

                <a
                    href="{{ url('/projects') }}"
                    class="text-[15px] font-medium text-brand-dark transition hover:text-brand-purple"
                >
                    Projects
                </a>

                <a
                    href="{{ url('/blog') }}"
                    class="text-[15px] font-medium text-brand-dark transition hover:text-brand-purple"
                >
                    Articles
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="text-[15px] font-medium text-brand-dark transition hover:text-brand-purple"
                >
                    Contact
                </a>

            </nav>


            {{-- =====================================================
                 DESKTOP CTA
            ====================================================== --}}
            <a
                href="{{ url('/contact') }}"
                class="hidden rounded-full bg-brand-purple px-7 py-3.5 text-[15px] font-bold text-white shadow-md shadow-brand-purple/10 transition duration-300 hover:-translate-y-0.5 hover:bg-brand-purple-dark hover:shadow-lg lg:inline-flex"
            >
                Start a Project
            </a>


            {{-- =====================================================
                 MOBILE MENU BUTTON
            ====================================================== --}}
            <button
                type="button"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-controls="mobile-navigation"
                aria-label="Toggle navigation"
                class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 text-brand-dark transition hover:border-brand-purple hover:text-brand-purple lg:hidden"
            >

                <svg
                    x-show="!open"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    x-show="open"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>


        {{-- =====================================================
             MOBILE NAVIGATION
        ====================================================== --}}
        <div
            id="mobile-navigation"
            x-show="open"
            x-transition
            @click.outside="open = false"
            class="border-t border-gray-100 py-5 lg:hidden"
        >

            <nav
                aria-label="Mobile navigation"
                class="flex flex-col gap-1"
            >

                <a
                    href="{{ url('/') }}"
                    class="rounded-xl px-4 py-3 text-sm font-semibold text-brand-purple hover:bg-brand-purple-light"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark hover:bg-brand-purple-light"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark hover:bg-brand-purple-light"
                >
                    Services
                </a>

                <a
                    href="{{ url('/solutions') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark hover:bg-brand-purple-light"
                >
                    Solutions
                </a>

                <a
                    href="{{ url('/projects') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark hover:bg-brand-purple-light"
                >
                    Projects
                </a>

                <a
                    href="{{ url('/blog') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark hover:bg-brand-purple-light"
                >
                    Insights
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-brand-dark hover:bg-brand-purple-light"
                >
                    Contact
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="mt-3 flex items-center justify-center rounded-full bg-brand-purple px-6 py-3.5 text-sm font-bold text-white"
                >
                    Start a Project
                </a>

            </nav>

        </div>

    </div>
</header>