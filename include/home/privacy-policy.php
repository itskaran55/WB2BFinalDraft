<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <title>Privacy Policy - WB2B | Cattle Feed Digital Trade Network</title>
    <meta name="description" content="Privacy Policy for WB2B. Learn how we handle, protect, and secure your data on our digital trade platform.">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
                        sans: ['"Plus Jakarta Sans"', '"Inter"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-padding-top: 6rem;
        }
        html, body {
            overflow-x: hidden;
            width: 100%;
        }
        body {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            background-color: #F8FAFC;
            color: #0F172A;
            -webkit-tap-highlight-color: transparent;
        }
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
        .theme-card {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 18px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen">

    <!-- Include Header Component if using PHP -->
    <!-- <?php include 'header.php'; ?> -->

    <!-- Fallback Header code if standalone -->
    <header id="mainHeader" class="fixed top-0 left-0 right-0 w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/90 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <a href="index.php" class="flex items-center gap-2.5 sm:gap-3 shrink-0 group focus:outline-none">
                    <img src="../assets/WB2BLogo.png" alt="WB2B Logo" class="h-9 sm:h-11 w-auto object-contain group-hover:scale-105 transition duration-200">
                </a>
                <nav class="hidden md:flex items-center gap-1.5 lg:gap-3 text-sm lg:text-[15px] font-bold text-slate-700">
                    <a href="index.php" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">Home</a>
                    <a href="index.php#importance" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">Why WB2B?</a>
                    <a href="index.php#contact" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">Contact Us</a>
                </nav>
                <div class="hidden md:flex items-center gap-3">
                    <a href="index.php#contact" class="btn-theme text-xs lg:text-sm !py-2.5 !px-5">
                        <span>Get in Touch</span>
                        <span>→</span>
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                    <button type="button" id="mobileMenuBtn" aria-label="Toggle menu" aria-expanded="false" class="p-2 sm:p-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-100">
                        <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-slate-200 px-5 py-4 shadow-xl space-y-3">
            <nav class="flex flex-col gap-1.5 font-bold text-slate-800 text-sm">
                <a href="index.php" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700">Home</a>
                <a href="index.php#importance" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700">Why WB2B?</a>
                <a href="index.php#contact" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700">Contact Us</a>
            </nav>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main class="flex-grow pt-24 sm:pt-32 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            
            <!-- Page Header -->
            <div class="text-center mb-10 sm:mb-14">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-blue-600 font-bold text-xs uppercase tracking-wider mb-3">Legal & Trust</span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">Privacy Policy</h1>
                <p class="mt-3 text-sm sm:text-base text-slate-600">Last updated: June 2026</p>
            </div>

            <!-- Content Card Container -->
            <div class="theme-card p-6 sm:p-10 lg:p-12 space-y-8 text-slate-700 leading-relaxed text-sm sm:text-base">
                
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">1. Introduction</h2>
                    <p>
                        Welcome to <strong>WB2B</strong> ("we," "our," or "us"). We respect your privacy and are committed to protecting your personal and business data. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you visit our digital trade network platform connecting cattle feed manufacturers, traders, and brokers.
                    </p>
                </section>

                <hr class="border-slate-100">

                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">2. Information We Collect</h2>
                    <p>We may collect information about you in a variety of ways, including:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li><strong>Personal & Business Details:</strong> Name, business name, email address, phone number, physical address, and GST/Tax identification numbers provided during registration or inquiry.</li>
                        <li><strong>Transaction Data:</strong> Records of trade inquiries, bids, communications, and commercial interactions conducted through the platform.</li>
                        <li><strong>Technical Data:</strong> IP address, browser type, device information, operating system, and usage logs collected automatically when you browse our website.</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">3. How We Use Your Information</h2>
                    <p>Having accurate information permits us to provide you with a smooth, efficient, and customized experience. Specifically, we use information collected to:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>Facilitate direct connections between manufacturers, traders, and brokers in the cattle feed ecosystem.</li>
                        <li>Manage your account, process inquiries, and deliver requested customer service support.</li>
                        <li>Send administrative information, updates, security alerts, and support messages.</li>
                        <li>Monitor and analyze usage trends and preferences to improve platform functionality.</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">4. Disclosure of Your Information</h2>
                    <p>
                        We do not sell, trade, or rent your personal identification information to third parties. We may share information only with verified network participants as necessary to facilitate trade orders, or with trusted service providers who assist us in operating our network, under strict confidentiality agreements.
                    </p>
                </section>

                <hr class="border-slate-100">

                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">5. Data Security</h2>
                    <p>
                        We implement administrative, technical, and physical security measures designed to protect your personal and commercial data from unauthorized access, loss, misuse, or alteration. However, no electronic transmission over the internet or storage technology can be guaranteed 100% secure.
                    </p>
                </section>

                <hr class="border-slate-100">

                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">6. Contact Us</h2>
                    <p>
                        If you have questions, comments, or concerns about this Privacy Policy, please reach out to us through our primary contact section or via email at support@wb2b.network.
                    </p>
                </section>

            </div>

        </div>
    </main>

    <!-- Script for Mobile Menu Toggle -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        const closeIcon = document.getElementById('closeIcon');

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>