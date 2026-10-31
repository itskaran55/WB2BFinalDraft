<!DOCTYPE html>
<html lang="gu" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <title>WB2B - પશુ આહાર ડિજિટલ વેપાર નેટવર્ક</title>
    <meta name="description" content="ઉત્પાદકો, વેપારીઓ અને દલાલો માટે પશુ આહારનું વિશ્વસનીય ડિજિટલ મંચ.">

    <!-- Google Fonts: Noto Sans Gujarati & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Gujarati:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#EFF6FF',
                            100: '#DBEAFE',
                            200: '#BFDBFE',
                            500: '#3B82F6',
                            600: '#2563EB',
                            700: '#1D4ED8',
                            800: '#1E40AF',
                            900: '#1E3A8A',
                        },
                        surface: '#F8FAFC',
                    },
                    fontFamily: {
                        sans: ['"Noto Sans Gujarati"', '"Plus Jakarta Sans"', 'sans-serif'],
                        gujarati: ['"Noto Sans Gujarati"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-padding-top: 5rem;
        }

        html, body {
            overflow-x: hidden;
            width: 100%;
        }

        body {
            font-family: 'Noto Sans Gujarati', 'Plus Jakarta Sans', sans-serif;
            background-color: #F8FAFC;
            color: #0F172A;
            -webkit-tap-highlight-color: transparent;
        }

        /* Modern Blue Primary Button */
        .btn-theme {
            background-color: #2563EB;
            color: #FFFFFF;
            font-weight: 700;
            border-radius: 12px;
            padding: 0.75rem 1.4rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.22);
            min-height: 44px;
        }
        .btn-theme:hover {
            background-color: #1D4ED8;
            transform: translateY(-1.5px);
            box-shadow: 0 6px 18px rgba(37, 99, 235, 0.32);
        }
        .btn-theme:active {
            transform: translateY(0);
        }

        /* Secondary Outline Button */
        .btn-theme-outline {
            background-color: #FFFFFF;
            color: #1E40AF;
            border: 1.5px solid #BFDBFE;
            font-weight: 700;
            border-radius: 12px;
            padding: 0.75rem 1.4rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            min-height: 44px;
        }
        .btn-theme-outline:hover {
            background-color: #EFF6FF;
            border-color: #2563EB;
            transform: translateY(-1.5px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
        }
        .btn-theme-outline:active {
            transform: translateY(0);
        }

        /* Soft Surface Card */
        .theme-card {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 18px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .theme-card:hover {
            border-color: #93C5FD;
            box-shadow: 0 10px 25px -4px rgba(30, 58, 138, 0.08);
            transform: translateY(-2px);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 7px;
        }
        ::-webkit-scrollbar-track {
            background: #F1F5F9;
        }
        ::-webkit-scrollbar-thumb {
            background: #94A3B8;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #2563EB;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased selection:bg-blue-600 selection:text-white">

    <!-- Fixed Header (Always Pinned to Top) -->
    <header id="mainHeader" class="fixed top-0 left-0 right-0 w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/90 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">

                <!-- Logo Section -->
                <a href="#hero" class="flex items-center gap-2.5 sm:gap-3 shrink-0 group focus:outline-none">
                    <div class="w-9 h-9 sm:w-11 sm:h-11 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center text-white shadow-md shadow-blue-500/25 group-hover:scale-105 transition duration-200 shrink-0">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-slate-900 leading-none">
                            WB<span class="text-blue-600">2</span>B
                        </span>
                        <span class="text-[9px] sm:text-[10px] font-bold text-slate-500 uppercase tracking-wider leading-tight">પશુ આહાર મંચ</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu (Hidden on mobile/tablet) -->
                <nav class="hidden md:flex items-center gap-1.5 lg:gap-3 text-sm lg:text-[15px] font-bold text-slate-700">
                    <a href="#hero" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">
                        મુખ્ય પાનું
                    </a>
                    <a href="#importance" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">
                        શા માટે WB2B?
                    </a>
                    <a href="#contact" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">
                        સંપર્ક ફોર્મ
                    </a>
                </nav>

                <!-- Desktop Action Button -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="#contact" class="btn-theme text-xs lg:text-sm !py-2.5 !px-5">
                        <span>સંપર્ક કરો</span>
                        <span>→</span>
                    </a>
                </div>

                <!-- Mobile Menu Hamburger Button -->
                <div class="flex items-center md:hidden">
                    <button type="button" 
                            id="mobileMenuBtn" 
                            aria-label="મેનુ ખોલો / બંધ કરો" 
                            aria-expanded="false" 
                            class="p-2 sm:p-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-100 active:scale-95 transition">
                        <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer Menu with Smooth Display -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-slate-200 px-5 py-4 shadow-xl space-y-3">
            <nav class="flex flex-col gap-1.5 font-bold text-slate-800 text-sm">
                <a href="#hero" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700 flex items-center justify-between transition">
                    <span>મુખ્ય પાનું</span>
                    <span class="text-xs text-slate-400">→</span>
                </a>
                <a href="#importance" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700 flex items-center justify-between transition">
                    <span>શા માટે WB2B?</span>
                    <span class="text-xs text-slate-400">→</span>
                </a>
                <a href="#contact" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700 flex items-center justify-between transition">
                    <span>સંપર્ક ફોર્મ</span>
                    <span class="text-xs text-slate-400">→</span>
                </a>
            </nav>
            <div class="pt-2 border-t border-slate-100">
                <a href="#contact" class="mobile-nav-item w-full btn-theme text-sm !py-3">
                    સંપર્ક કરો →
                </a>
            </div>
        </div>
    </header>

    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        const closeIcon = document.getElementById('closeIcon');
        const mobileNavItems = document.querySelectorAll('.mobile-nav-item');

        function toggleMenu(show) {
            const isHidden = mobileMenu.classList.contains('hidden');
            const shouldOpen = show !== undefined ? show : isHidden;

            if (shouldOpen) {
                mobileMenu.classList.remove('hidden');
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
        }

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                toggleMenu();
            });
        }

        // Close mobile drawer when clicking any link
        mobileNavItems.forEach(item => {
            item.addEventListener('click', function () {
                toggleMenu(false);
            });
        });

        // Close mobile drawer when clicking outside
        document.addEventListener('click', function (event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                toggleMenu(false);
            }
        });
    </script>
