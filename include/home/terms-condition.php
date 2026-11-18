<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <title>Terms & Conditions - WB2B | Cattle Feed Digital Trade Network</title>
    <meta name="description" content="Terms and Conditions for WB2B Platform. Mandatory rules and guidelines for traders, brokers, oil mill owners, and members in English and Gujarati.">

    <!-- Google Fonts: Plus Jakarta Sans, Inter & Noto Sans Gujarati -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Noto+Sans+Gujarati:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

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
                        sans: ['"Plus Jakarta Sans"', '"Inter"', '"Noto Sans Gujarati"', 'sans-serif'],
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
            font-family: 'Plus Jakarta Sans', 'Inter', 'Noto Sans Gujarati', sans-serif;
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
        .lang-tab {
            transition: all 0.2s ease;
        }
        .lang-tab.active {
            background-color: #2563EB;
            color: #FFFFFF;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.25);
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
                <a href="/index.php" class="flex items-center gap-2.5 sm:gap-3 shrink-0 group focus:outline-none">
                    <img src="/assets/WB2BLogo.png" alt="WB2B Logo" class="h-9 sm:h-11 w-auto object-contain group-hover:scale-105 transition duration-200">
                </a>
                <nav class="hidden md:flex items-center gap-1.5 lg:gap-3 text-sm lg:text-[15px] font-bold text-slate-700">
                    <a href="/index.php" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">Home</a>
                    <a href="/index.php#importance" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">Why WB2B?</a>
                    <a href="/index.php#contact" class="px-3.5 lg:px-4 py-2 rounded-xl hover:text-blue-600 hover:bg-blue-50 transition">Contact Us</a>
                </nav>
                <div class="hidden md:flex items-center gap-3">
                    <a href="/index.php#contact" class="btn-theme text-xs lg:text-sm !py-2.5 !px-5">
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
                <a href="/index.php" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700">Home</a>
                <a href="/index.php#importance" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700">Why WB2B?</a>
                <a href="/index.php#contact" class="mobile-nav-item py-2.5 px-3.5 rounded-xl hover:bg-blue-50 hover:text-blue-700">Contact Us</a>
            </nav>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main class="flex-grow pt-24 sm:pt-32 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">

            <!-- Page Header & Language Switcher -->
            <div class="text-center mb-10 sm:mb-12">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-blue-600 font-bold text-xs uppercase tracking-wider mb-3">
                    Platform Governance & Rules
                </span>

                <h1 id="pageTitle" class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">
                    Terms & Conditions
                </h1>
                <p id="pageSubtitle" class="mt-3 text-sm sm:text-base text-slate-600 max-w-2xl mx-auto">
                    WB2B (WB2B Platform) — Mandatory rules & regulations for all Buyers, Sellers, Brokers, Oil Mill Owners, and Members.
                </p>

                <!-- Language Toggle Pill -->
                <div class="mt-6 inline-flex items-center p-1.5 bg-white border border-slate-200 rounded-2xl shadow-sm relative z-20" role="group" aria-label="Language Switcher">
                    <button type="button" id="btnEn" data-lang="en" class="lang-tab active px-5 py-2.5 rounded-xl text-sm font-bold cursor-pointer select-none">
                        English
                    </button>
                    <button type="button" id="btnGu" data-lang="gu" class="lang-tab px-5 py-2.5 rounded-xl text-sm font-bold text-slate-600 hover:text-slate-900 cursor-pointer select-none">
                        ગુજરાતી (Gujarati)
                    </button>
                </div>
            </div>

            <!-- ==================== ENGLISH CONTENT ==================== -->
            <div id="contentEn" class="theme-card p-6 sm:p-10 lg:p-12 space-y-8 text-slate-700 leading-relaxed text-sm sm:text-base" style="display: block;">

                <!-- Intro -->
                <div class="bg-blue-50/70 border border-blue-100 rounded-2xl p-5 sm:p-6 text-slate-800 space-y-2">
                    <p class="font-semibold">
                        This document shall be mandatory and binding on all traders (<strong>BUYERS</strong> and <strong>SELLERS</strong>), brokers, oil mill owners, and members associated with the <strong>WB2B Platform</strong>.
                    </p>
                    <p class="text-slate-600 text-sm">
                        WB2B is a business platform created to promote transparent, trustworthy, and growth-oriented trade.
                    </p>
                </div>

                <!-- Rule 1 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        1. Full Responsibility of Transactions and Payments
                    </h2>
                    <p>
                        All transactions conducted through the WB2B Platform shall be considered direct (internal) transactions between the concerned parties. WB2B does not charge or add any brokerage to such transactions.
                    </p>
                    <p>
                        The entire responsibility for payment related to any transaction shall rest solely with the respective traders. WB2B, its Founder, Management Team, or the Platform shall not be held responsible for non-payment, delayed payment, disputes, losses, or damages.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 2 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        2. Mandatory Permission for Sale / Purchase of Products
                    </h2>
                    <p>
                        Any trader selling a product on the WB2B Platform must obtain prior permission from the concerned Oil Mill Owner and/or Broker.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>No trader or broker shall buy or sell any product without such permission.</li>
                        <li>Any transaction conducted without mill approval or area broker approval shall be considered a rule violation.</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 3 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        3. Agency System and Area Discipline
                    </h2>
                    <p>
                        Where an Agency System (<strong>Mill – Broker – Dealer</strong>) is applicable, traders must ensure that their activities do not disturb or harm the business of the local dealer.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>Selling goods without following the agency system is strictly prohibited.</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 4 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        4. Violation of Rules and Disciplinary Action
                    </h2>
                    <p>If any trader, broker, oil mill owner, or member:</p>
                    <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                        <li>Intentionally harasses others</li>
                        <li>Attempts to cause damage</li>
                        <li>Engages in negative or inappropriate activities</li>
                    </ul>
                    <p class="pt-1 font-semibold text-slate-800">WB2B Management may take the following actions:</p>
                    <ol class="list-decimal pl-5 space-y-1.5 text-slate-600 font-medium">
                        <li>Verbal warning (first instance)</li>
                        <li>Lifetime cancellation of WB2B Membership</li>
                        <li>Removal from all WB2B groups</li>
                        <li>Official public notice within WB2B groups</li>
                    </ol>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 5 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        5. Social Media Conduct and Legal Liability
                    </h2>
                    <p>
                        Any negative, insulting, or defamatory content related to WB2B on Facebook, Instagram, WhatsApp Groups, or other platforms shall be the sole legal responsibility of the individual posting it.
                    </p>
                    <p>
                        Members must ensure that WB2B's brand image is not harmed.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 6 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        6. Annual Appointment of Members
                    </h2>
                    <p>
                        WB2B Management Team members (President, Secretary, Coordinator Committee Members) shall be appointed annually, from <strong>January to December</strong>.
                    </p>
                    <p>
                        Performance-based selection will apply. Each member shall be eligible only once per year.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 7 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        7. Fees and Meeting Attendance
                    </h2>
                    <p>
                        Registered members must pay the required fee for each corporate meeting. If a member attends three meetings with unpaid fees, they will not be allowed to attend the fourth meeting. This rule shall be strictly enforced.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Declaration & Acceptance -->
                <section class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">
                        Declaration & Acceptance
                    </h2>
                    <p class="font-medium text-slate-800">
                        By registering or transacting as a Trader / Broker / Oil Mill Owner and WB2B Member, you hereby confirm that:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>You have read, understood, and voluntarily accepted these Terms & Conditions.</li>
                        <li>You agree to fully comply with all rules.</li>
                        <li>You shall be solely responsible for all transactions, payments, disputes, or losses.</li>
                        <li>You shall not claim ignorance of these rules in the future.</li>
                        <li>Any decision taken by WB2B Management shall be final and binding.</li>
                    </ul>
                </section>

                <!-- Registered Office Footer -->
                <div class="pt-2 text-center text-xs sm:text-sm text-slate-500 border-t border-slate-100">
                    <p class="font-bold text-slate-700 uppercase tracking-wide">Registered Office</p>
                    <p class="mt-1">F-4 Rajvi Complex, Rambag, Maninagar - Ahmedabad, Gujarat</p>
                </div>

            </div>

            <!-- ==================== GUJARATI CONTENT ==================== -->
            <div id="contentGu" class="hidden theme-card p-6 sm:p-10 lg:p-12 space-y-8 text-slate-700 leading-relaxed text-sm sm:text-base" style="display: none;">

                <!-- Intro -->
                <div class="bg-blue-50/70 border border-blue-100 rounded-2xl p-5 sm:p-6 text-slate-800 space-y-2">
                    <p class="font-semibold">
                        આ દસ્તાવેજ <strong>WB2B (WB2B Platform)</strong> પર જોડાયેલા તમામ વેપારીઓ (<strong>BUYER AND SELLER</strong>), બ્રોકર, મિલ ઓનર્સ અને સભ્યો માટે ફરજિયાત રીતે લાગુ પડશે.
                    </p>
                    <p class="text-slate-600 text-sm">
                        WB2B એક વ્યવસાયિક પ્લેટફોર્મ છે જે પારદર્શક, વિશ્વાસપાત્ર અને વિકાસલક્ષી વેપાર માટે બનાવવામાં આવ્યું છે.
                    </p>
                </div>

                <!-- Rule 1 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 1 : સોદા અને પેમેન્ટની સંપૂર્ણ જવાબદારી
                    </h2>
                    <p>
                        WB2B પ્લેટફોર્મ પર થનારા તમામ સોદા સંપૂર્ણપણે આંતરિક (Direct) સોદા ગણાશે. આ સોદાઓમાં WB2B તરફથી કોઈપણ પ્રકારનું બ્રોકરેજ ઉમેરવામાં આવશે નહીં.
                    </p>
                    <p>
                        સોદા સંબંધિત પેમેન્ટની સંપૂર્ણ જવાબદારી જે તે વેપારી મિત્રોની રહેશે. પેમેન્ટ ન થવા, મોડું થવા, વિવાદ થવા કે નુકસાન થવા અંગે WB2B ના Founder, Management Team અથવા Platform કોઈપણ રીતે જવાબદાર રહેશે નહીં.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 2 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 2 : પ્રોડક્ટ વેચાણ/ખરીદી માટે પરમિશન અનિવાર્ય
                    </h2>
                    <p>
                        WB2B પર જો કોઈ વેપારી પોતાની પ્રોડક્ટ વેચી રહ્યો હોય, તો તે પ્રોડક્ટ સંબંધિત ઓઇલ મિલ ઓનરની તથા બ્રોકરની પૂર્વ મંજૂરી (Permission) લેવી ફરજિયાત રહેશે.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>પરમિશન લીધા વગર કોઈપણ વેપારી અથવા બ્રોકર હસ્તકની પ્રોડક્ટ ખરીદી કે વેચી શકશે નહીં.</li>
                        <li>WB2B પર સૂચિબદ્ધ કોઈપણ પ્રોડક્ટ માટે મિલ મંજૂરી અથવા જે તે એરિયાના બ્રોકર મિત્રની મંજૂરી વિના લેવડ-દેવડ કરવી નિયમ વિરુદ્ધ ગણાશે.</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 3 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 3 : એજન્સી સિસ્ટમ અને એરિયા ડિસિપ્લિન
                    </h2>
                    <p>
                        ગુજરાત તેમજ ગુજરાત બહારના વેપારીઓ માટે, જ્યાં એજન્સી સિસ્ટમ (<strong>મિલ – બ્રોકર – ડીલર</strong>) લાગુ હોય, ત્યાં માલ ખરીદતા અને વેચતા સમયે તે એરિયાના ડીલરના વ્યવસાયને કોઈપણ પ્રકારની ડિસ્ટર્બન્સ કે નુકસાન ન થાય તેનું સંપૂર્ણ ધ્યાન રાખવું ફરજિયાત રહેશે.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>કોઈ પણ વેપારી એજન્સી સિસ્ટમનું પાલન કર્યા વિના કોઈ પણ જગ્યાએ માલ વેચી શકશે નહીં.</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 4 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 4 : નિયમભંગ અને દંડની કાર્યવાહી
                    </h2>
                    <p>ઉપરોક્ત નિયમોનું પાલન ન કરનાર કોઈપણ વેપારી, બ્રોકર, ઓઇલ મિલ ઓનર અથવા અન્ય સભ્ય જો:</p>
                    <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                        <li>જાણબૂઝી અન્યને હેરાન કરે</li>
                        <li>નુકસાન પહોંચાડવાનો પ્રયત્ન કરે</li>
                        <li>નકારાત્મક અથવા અયોગ્ય પ્રવૃત્તિ કરે</li>
                    </ul>
                    <p class="pt-1 font-semibold text-slate-800">તો WB2B Management / Community દ્વારા નીચે મુજબના પગલાં લેવામાં આવશે:</p>
                    <ol class="list-decimal pl-5 space-y-1.5 text-slate-600 font-medium">
                        <li>પ્રથમ વખત મૌખિક ચેતવણી આપવામાં આવશે.</li>
                        <li>તેમ છતાં સુધારો ન થાય તો Life Time WB2B Group Membership રદ્દ કરવામાં આવશે.</li>
                        <li>તે સભ્યને તમામ WB2B ગ્રુપમાંથી દૂર કરવામાં આવશે.</li>
                        <li>આ બાબતની ઓફિશિયલ જાણ WB2B ગ્રુપમાં જાહેર કરવામાં આવશે.</li>
                    </ol>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 5 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 5 : સોશિયલ મીડિયા વર્તન અને કાનૂની જવાબદારી
                    </h2>
                    <p>
                        WB2B સંબંધિત Facebook, Instagram, WhatsApp Groups કે અન્ય સોશિયલ મીડિયા પ્લેટફોર્મ પર:
                    </p>
                    <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                        <li>નકારાત્મક પોસ્ટ</li>
                        <li>અપમાનજનક ટિપ્પણી</li>
                        <li>બદનામ કરતી પ્રવૃત્તિ</li>
                    </ul>
                    <p>
                        કોઈ પણ વ્યક્તિ અથવા વેપારી દ્વારા કરવામાં આવશે તો તેની સંપૂર્ણ કાનૂની જવાબદારી તે વ્યક્તિ/વેપારીની રહેશે. આવી પ્રવૃત્તિથી બ્રાન્ડ ઇમેજને નુકસાન પહોંચી શકે માટે આવું ન થાય તેનું સંપૂર્ણ ધ્યાન રાખવું.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 6 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 6 : સભ્યોની વાર્ષિક નિમણૂક
                    </h2>
                    <p>
                        WB2B મેનેજમેન્ટ ટીમના તમામ સભ્યો (પ્રેસિડેન્ટ, સેક્રેટરી અને કો-ઓર્ડિનેટર કમિટી મેમ્બર) – તેમની નિમણૂક દર વર્ષે થશે. વર્ષ <strong>જાન્યુઆરીથી ડિસેમ્બર</strong> સુધી ગણાશે.
                    </p>
                    <p>
                        જે સભ્યનું પર્ફોમન્સ વધુ સારું હશે તેમને વાર્ષિક નિમણૂકમાં ભાગ લેવાનો મોકો મળશે. દરેક સભ્યને વાર્ષિક નિમણૂકમાં ભાગ લેવા માટે એક મોકો મળશે.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Rule 7 -->
                <section class="space-y-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                        નિયમ નં. 7 : ફી અને મિટિંગમાં હાજરી
                    </h2>
                    <p>
                        રજીસ્ટર મેમ્બર માટે આવનાર દરેક કોર્પોરેટ મીટીંગમાં ફી ભરવી ફરજિયાત છે. જો કોઈ મેમ્બર ત્રણ મીટીંગ સુધી આવે અને તેની ફી બાકી હશે તો તેને ચોથી મિટિંગમાં મંજૂરી મળશે નહીં. આ નિયમનો કડક પાલન કરાશે.
                    </p>
                    <p class="text-slate-600">
                        ઉપરોક્ત નિયમો રજીસ્ટર મેમ્બર મિત્રો તથા સભ્યો માટે ફરજિયાત છે. કૃપા કરીને તમારી ફી સમયસર ભરીને મિટિંગમાં હાજરી આપવાનું સુનિશ્ચિત કરો.
                    </p>
                </section>

                <hr class="border-slate-100">

                <!-- Declaration & Acceptance -->
                <section class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">
                        ઘોષણા અને સ્વીકૃતિ (Declaration & Acceptance)
                    </h2>
                    <p class="font-medium text-slate-800">
                        WB2B રજીસ્ટર મેમ્બર / વેપારી / બ્રોકર / ઓઇલ મિલ ઓનર તરીકે જાહેર રૂપે અને સંપૂર્ણ સમજ સાથે આ બાબતની ખાતરી આપવામાં આવે છે કે:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600">
                        <li>મેં ઉપર દર્શાવેલ WB2B (WB2B Platform) ના તમામ નિયમો અને શરતો સંપૂર્ણ રીતે વાંચી, સમજી અને સ્વીકારી છે.</li>
                        <li>આ તમામ Terms & Conditions મને સ્વીકાર્ય છે અને હું તેની સંપૂર્ણ પાલન કરવા માટે સંમત છું.</li>
                        <li>WB2B પ્લેટફોર્મ પર મારા દ્વારા કરવામાં આવનારા તમામ સોદા, લેવડ-દેવડ, પેમેન્ટ, વિવાદ અથવા નુકસાન માટે હું પોતે સંપૂર્ણ રીતે જવાબદાર રહીશ.</li>
                        <li>ભવિષ્યમાં કોઈપણ પ્રકારનો વિવાદ ઊભો થાય તો “મને નિયમોની જાણ નહોતી” એવો કોઈ દાવો હું કરી શકીશ નહીં.</li>
                        <li>આ શરતોનો ભંગ થવાથી WB2B Management દ્વારા લેવાતા કોઈપણ નિર્ણય મને બંધનકારક (Binding) રહેશે, જે હું વિવાદ વગર સ્વીકારું છું.</li>
                        <li>આ શરતોને મેં મારી પોતાની ઇચ્છા અને સંપૂર્ણ સંમતિ સાથે સ્વીકારી છે.</li>
                    </ul>
                </section>

                <!-- Registered Office Footer -->
                <div class="pt-2 text-center text-xs sm:text-sm text-slate-500 border-t border-slate-100">
                    <p class="font-bold text-slate-700 uppercase tracking-wide">રજીસ્ટર ઓફિસ (Registered Office)</p>
                    <p class="mt-1">F-4 રાજવી કોમ્પ્લેક્સ, રામબાગ, મણિનગર - અમદાવાદ, ગુજરાત</p>
                </div>

            </div>

        </div>
    </main>

    <!-- Include Footer Component if using PHP -->
    <!-- <?php include 'footer.php'; ?> -->

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const hamburgerIcon = document.getElementById('hamburgerIcon');
            const closeIcon = document.getElementById('closeIcon');

            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                    if (hamburgerIcon) hamburgerIcon.classList.toggle('hidden');
                    if (closeIcon) closeIcon.classList.toggle('hidden');
                });
            }

            // Language Switcher (English <-> Gujarati)
            const contentEn = document.getElementById('contentEn');
            const contentGu = document.getElementById('contentGu');
            const btnEn = document.getElementById('btnEn');
            const btnGu = document.getElementById('btnGu');
            const pageTitle = document.getElementById('pageTitle');
            const pageSubtitle = document.getElementById('pageSubtitle');

            function setLanguage(lang) {
                if (!contentEn || !contentGu || !btnEn || !btnGu) return;

                if (lang === 'gu') {
                    contentEn.classList.add('hidden');
                    contentEn.style.display = 'none';

                    contentGu.classList.remove('hidden');
                    contentGu.style.display = 'block';

                    btnGu.classList.add('active');
                    btnGu.classList.remove('text-slate-600');
                    btnEn.classList.remove('active');
                    btnEn.classList.add('text-slate-600');

                    if (pageTitle) pageTitle.textContent = 'નિયમો અને શરતો (Terms & Conditions)';
                    if (pageSubtitle) pageSubtitle.textContent = 'WB2B (WB2B Platform) — તમામ વેપારીઓ, બ્રોકર, ઓઇલ મિલ ઓનર્સ અને સભ્યો માટે ફરજિયાત નિયમો.';
                    document.documentElement.lang = 'gu';
                } else {
                    contentGu.classList.add('hidden');
                    contentGu.style.display = 'none';

                    contentEn.classList.remove('hidden');
                    contentEn.style.display = 'block';

                    btnEn.classList.add('active');
                    btnEn.classList.remove('text-slate-600');
                    btnGu.classList.remove('active');
                    btnGu.classList.add('text-slate-600');

                    if (pageTitle) pageTitle.textContent = 'Terms & Conditions';
                    if (pageSubtitle) pageSubtitle.textContent = 'WB2B (WB2B Platform) — Mandatory rules & regulations for all Buyers, Sellers, Brokers, Oil Mill Owners, and Members.';
                    document.documentElement.lang = 'en';
                }
            }

            if (btnEn) btnEn.addEventListener('click', function () { setLanguage('en'); });
            if (btnGu) btnGu.addEventListener('click', function () { setLanguage('gu'); });

            // Support URL param ?lang=gu if shared directly in Gujarati
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('lang') === 'gu') {
                setLanguage('gu');
            }
        });
    </script>
</body>

</html>