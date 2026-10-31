<?php
// Simple Contact Form submission handler (Name, Phone, Email only)
$formSuccess = false;
$submittedName = '';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wb2b_simple_contact'])) {
    $fullName = htmlspecialchars(trim($_POST['fullName'] ?? ''));
    $phone    = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $email    = htmlspecialchars(trim($_POST['email'] ?? ''));

    if (!empty($fullName) && !empty($phone)) {
        $formSuccess = true;
        $submittedName = $fullName;
    }
}
?>

<!-- Section 3: સરળ સંપર્ક ફોર્મ (માત્ર નામ, ફોન અને ઈમેલ - સંપૂર્ણ રિસ્પોન્સિવ) -->
<section id="contact" class="py-12 sm:py-16 lg:py-20 bg-slate-50 border-b border-slate-200/80">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/80 text-blue-800 font-bold text-[11px] sm:text-xs uppercase tracking-wider mb-3 sm:mb-4 border border-blue-200">
                સરળ સંપર્ક
            </span>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                પશુ આહાર વેપાર મંચ સાથે આજે જ જોડાવો
            </h2>

            <p class="mt-2.5 sm:mt-3 text-slate-600 text-sm sm:text-base font-medium leading-relaxed">
                નીચે તમારી વિગત ભરો. અમારી ટીમ તમારા વોટ્સએપ પર તાત્કાલિક સંપર્ક કરશે.
            </p>
        </div>

        <!-- Simple Contact Card (Name, Phone, Email) -->
        <div class="bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 border border-slate-200/90 shadow-xl shadow-blue-900/5 relative">
            
            <form id="simpleContactForm" method="POST" action="#contact" onsubmit="handleSimpleSubmit(event)" class="space-y-4 sm:space-y-5">
                <input type="hidden" name="wb2b_simple_contact" value="1">
                
                <!-- 1. Full Name -->
                <div>
                    <label class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5">
                        તમારું પૂરું નામ <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" 
                           name="fullName" 
                           id="simpleName"
                           required 
                           placeholder="દા.ત. રમેશભાઈ પટેલ" 
                           class="w-full text-base sm:text-sm px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-medium text-slate-900 transition">
                </div>

                <!-- 2. Phone Number -->
                <div>
                    <label class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5">
                        મોબાઈલ નંબર (WhatsApp) <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute left-3.5 sm:left-4 top-2.5 sm:top-3 text-sm text-slate-400 font-bold">+91</span>
                        <input type="tel" 
                               name="phone" 
                               id="simplePhone"
                               required 
                               pattern="[0-9]{10}" 
                               maxlength="10" 
                               placeholder="૯૮૭૬૫ ૪૩૨૧૦" 
                               class="w-full text-base sm:text-sm pl-12 sm:pl-14 pr-3.5 sm:pr-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-mono text-slate-900 transition">
                    </div>
                </div>

                <!-- 3. Email Address -->
                <div>
                    <label class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5 flex items-center justify-between">
                        <span>ઈમેલ એડ્રેસ</span>
                        <span class="text-[11px] sm:text-xs text-slate-400 font-normal">મરજિયાત</span>
                    </label>
                    <input type="email" 
                           name="email" 
                           id="simpleEmail"
                           placeholder="દા.ત. ramesh@example.com" 
                           class="w-full text-base sm:text-sm px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-medium text-slate-900 transition">
                </div>

                <!-- Submit Button -->
                <div class="pt-2 sm:pt-3">
                    <button type="submit" 
                            class="w-full btn-theme text-sm sm:text-base !py-3 sm:!py-3.5 shadow-md shadow-blue-500/25">
                        <span>સંપર્ક માટે વિગત મોકલો</span>
                        <span>→</span>
                    </button>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-between gap-2.5 sm:gap-4 pt-2 text-xs text-slate-500 font-medium text-center sm:text-left">
                    <span>🔒 તમારી માહિતી ૧૦૦% સુરક્ષિત છે.</span>
                    <a href="https://wa.me/919876543210?text=નમસ્તે,%20મારે%20WB2B%20વિશે%20માહિતી%20મેળવવી%20છે" target="_blank" class="text-blue-600 font-bold hover:underline inline-flex items-center gap-1">
                        <span>સીધા WhatsApp પર જોડાઓ</span> →
                    </a>
                </div>

            </form>

            <!-- Success Overlay Notice -->
            <div id="simpleSuccessNotice" class="<?php echo $formSuccess ? '' : 'hidden'; ?> absolute inset-0 bg-white/98 rounded-2xl sm:rounded-3xl flex flex-col items-center justify-center p-6 text-center z-20">
                <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-black text-xl sm:text-2xl mb-3 sm:mb-4 shadow-md">
                    ✓
                </div>
                <h4 class="text-xl sm:text-2xl font-black text-slate-900 mb-2">
                    આભાર! તમારી વિગત મળી ગઈ છે.
                </h4>
                <p class="text-xs sm:text-sm text-slate-600 max-w-md mb-5 sm:mb-6 leading-relaxed font-medium">
                    <span id="simpleApplicantName" class="font-bold text-blue-900"><?php echo $submittedName; ?></span>, અમારી ટીમ ટૂંક સમયમાં તમારા WhatsApp નંબર પર સંપર્ક કરશે.
                </p>
                <div class="flex flex-col sm:flex-row gap-2.5 sm:gap-3 w-full sm:w-auto justify-center">
                    <a href="https://wa.me/919876543210" target="_blank" class="btn-theme text-xs !py-2.5 !px-5 text-center">
                        વોટ્સએપ પર વાત કરો
                    </a>
                    <button type="button" onclick="resetSimpleForm()" class="btn-theme-outline text-xs !py-2.5 !px-5 text-center">
                        ફરીથી ફોર્મ ભરો
                    </button>
                </div>
            </div>

        </div>

    </div>

    <!-- Inline Script -->
    <script>
        function handleSimpleSubmit(event) {
            const name = document.getElementById('simpleName').value.trim();
            const phone = document.getElementById('simplePhone').value.trim();

            if (!name || !phone) {
                alert('કૃપા કરીને પૂરું નામ અને ફોન નંબર ભરો.');
                event.preventDefault();
                return false;
            }

            document.getElementById('simpleApplicantName').textContent = name;
        }

        function resetSimpleForm() {
            document.getElementById('simpleContactForm').reset();
            document.getElementById('simpleSuccessNotice').classList.add('hidden');
        }
    </script>
</section>
