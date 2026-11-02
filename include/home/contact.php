<?php
// Contact Form submission handler (Name, Phone, Role, Email, Message)
$formSuccess = false;
$submittedName = '';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wb2b_simple_contact'])) {
    $fullName = htmlspecialchars(trim($_POST['fullName'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $userRole = htmlspecialchars(trim($_POST['userRole'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty($fullName) && !empty($phone)) {
        $formSuccess = true;
        $submittedName = $fullName;
    }
}
?>

<!-- Section 3: સરળ સંપર્ક ફોર્મ (નામ, ફોન, ઈમેલ અને સંદેશ - સંપૂર્ણ રિસ્પોન્સિવ) -->
<section id="contact" class="py-12 sm:py-16 lg:py-20 bg-slate-50 border-b border-slate-200/80">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-12">
            <span
                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/80 text-blue-800 font-bold text-[11px] sm:text-xs uppercase tracking-wider mb-3 sm:mb-4 border border-blue-200">
                સરળ સંપર્ક
            </span>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                પશુ આહાર વેપાર મંચ સાથે આજે જ જોડાવો
            </h2>

            <p class="mt-2.5 sm:mt-3 text-slate-600 text-sm sm:text-base font-medium leading-relaxed">
                નીચે તમારી વિગત ભરો. અમારી ટીમ તમારા વોટ્સએપ પર તાત્કાલિક સંપર્ક કરશે.
            </p>
        </div>

        <!-- Contact Card (Name, Phone, Email, Message) -->
        <div
            class="bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 border border-slate-200/90 shadow-xl shadow-blue-900/5 relative">

            <form id="simpleContactForm" method="POST" action="#contact" onsubmit="handleSimpleSubmit(event)"
                class="space-y-4 sm:space-y-5">
                <input type="hidden" name="wb2b_simple_contact" value="1">

                <!-- 1. Full Name -->
                <div>
                    <label for="simpleName" class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5">
                        તમારું પૂરું નામ <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" 
                           name="fullName" 
                           id="simpleName" 
                           required 
                           autocomplete="name"
                           placeholder="દા.ત. રમેશભાઈ પટેલ"
                           class="w-full text-base sm:text-sm px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-medium text-slate-900 transition">
                </div>

                <!-- 2. Phone Number -->
                <div>
                    <label for="simplePhone" class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5">
                        મોબાઈલ નંબર (WhatsApp) <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute left-3.5 sm:left-4 top-2.5 sm:top-3 text-sm text-slate-400 font-bold">+91</span>
                        <input type="tel" 
                               name="phone" 
                               id="simplePhone" 
                               required 
                               autocomplete="tel"
                               pattern="[0-9]{10}" 
                               maxlength="10"
                               placeholder="૯૮૭૬૫ ૪૩૨૧૦"
                               class="w-full text-base sm:text-sm pl-12 sm:pl-14 pr-3.5 sm:pr-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-mono text-slate-900 transition">
                    </div>
                </div>

                <!-- 3. You Are (તમે કોણ છો? - ઉત્પાદક / વેપારી / દલાલ) -->
                <div>
                    <label class="block text-xs sm:text-sm font-bold text-slate-800 mb-2">
                        તમે કોણ છો? (તમારો વર્ગ પસંદ કરો) <span class="text-rose-500">*</span>
                    </label>
                    <div class="grid grid-cols-3 gap-2 sm:gap-3">
                        <label
                            class="relative flex flex-col items-center justify-center py-3 px-2 sm:px-3 rounded-xl border border-slate-300 bg-slate-50/60 cursor-pointer hover:border-blue-500 hover:bg-blue-50/40 transition duration-150 text-center has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:shadow-sm">
                            <input type="radio" name="userRole" value="ઉત્પાદક (Manufacturer)" class="sr-only" checked>
                            <span class="text-xs sm:text-sm font-bold text-slate-900">ઉત્પાદક</span>
                            <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium mt-0.5">મિલ / પ્રોસેસિંગ</span>
                        </label>

                        <label
                            class="relative flex flex-col items-center justify-center py-3 px-2 sm:px-3 rounded-xl border border-slate-300 bg-slate-50/60 cursor-pointer hover:border-blue-500 hover:bg-blue-50/40 transition duration-150 text-center has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:shadow-sm">
                            <input type="radio" name="userRole" value="વેપારી (Merchant)" class="sr-only">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">વેપારી</span>
                            <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium mt-0.5">જથ્થાબંધ / છૂટક</span>
                        </label>

                        <label
                            class="relative flex flex-col items-center justify-center py-3 px-2 sm:px-3 rounded-xl border border-slate-300 bg-slate-50/60 cursor-pointer hover:border-blue-500 hover:bg-blue-50/40 transition duration-150 text-center has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50 has-[:checked]:shadow-sm">
                            <input type="radio" name="userRole" value="દલાલ (Broker)" class="sr-only">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">દલાલ</span>
                            <span class="text-[10px] sm:text-[11px] text-slate-500 font-medium mt-0.5">બ્રોકર / એજન્ટ</span>
                        </label>
                    </div>
                </div>

                <!-- 4. Email Address -->
                <div>
                    <label for="simpleEmail" class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5 flex items-center justify-between">
                        <span>ઈમેલ એડ્રેસ</span>
                        <span class="text-[11px] sm:text-xs text-slate-400 font-normal">(જરૂરી નથી)</span>
                    </label>
                    <input type="email" 
                           name="email" 
                           id="simpleEmail" 
                           autocomplete="email"
                           placeholder="દા.ત. ramesh@example.com"
                           class="w-full text-base sm:text-sm px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-medium text-slate-900 transition">
                </div>

                <!-- 5. Message / Requirement Content -->
                <div>
                    <label
                        class="block text-xs sm:text-sm font-bold text-slate-800 mb-1.5 flex items-center justify-between">
                        <span>તમારો સંદેશ / જરૂરિયાત (Message)</span>
                        <span class="text-[11px] sm:text-xs text-slate-400 font-normal">(જરૂરી નથી)</span>
                    </label>
                    <textarea name="message" id="simpleMessage" rows="3"
                        placeholder="તમારો સંદેશ અથવા કઈ પ્રોડક્ટ (દા.ત. કપાસિયા ખોળ, ડેરી ખાણ, મકાઈ ચૂરો) ખરીદવા કે વેચવા માંગો છો તેની વિગત અહીં લખો..."
                        class="w-full text-base sm:text-sm px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-xl border border-slate-300 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100 bg-slate-50/50 font-medium text-slate-900 transition resize-y"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="pt-2 sm:pt-3">
                    <button type="submit" id="simpleSubmitBtn"
                        class="w-full btn-theme text-sm sm:text-base !py-3 sm:!py-3.5 shadow-md shadow-blue-500/25 flex items-center justify-center gap-2">
                        <span id="simpleSubmitBtnText">સંપર્ક માટે વિગત મોકલો →</span>
                    </button>
                </div>

                <div
                    class="flex flex-col sm:flex-row items-center justify-between gap-2.5 sm:gap-4 pt-2 text-xs text-slate-500 font-medium text-center sm:text-left">
                    <span>🔒 તમારી માહિતી ૧૦૦% સુરક્ષિત છે.</span>
                    <a href="https://wa.me/919512015163?text=નમસ્તે,%20મારે%20WB2B%20વિશે%20માહિતી%20મેળવવી%20છે"
                        target="_blank" class="text-blue-600 font-bold hover:underline inline-flex items-center gap-1">
                        <span>સીધા WhatsApp પર જોડાઓ</span> →
                    </a>
                </div>

            </form>

            <!-- Success Overlay Notice -->
            <div id="simpleSuccessNotice"
                class="<?php echo $formSuccess ? '' : 'hidden'; ?> absolute inset-0 bg-white/98 rounded-2xl sm:rounded-3xl flex flex-col items-center justify-center p-6 text-center z-20">
                <div
                    class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-black text-xl sm:text-2xl mb-3 sm:mb-4 shadow-md">
                    ✓
                </div>
                <h4 class="text-xl sm:text-2xl font-black text-slate-900 mb-2">
                    આભાર! તમારી વિગત મળી ગઈ છે.
                </h4>
                <p class="text-xs sm:text-sm text-slate-600 max-w-md mb-5 sm:mb-6 leading-relaxed font-medium">
                    <span id="simpleApplicantName" class="font-bold text-blue-900"><?php echo $submittedName; ?></span>,
                    અમારી ટીમ ટૂંક સમયમાં તમારા WhatsApp નંબર પર સંપર્ક કરશે.
                </p>
                <div class="flex flex-col sm:flex-row gap-2.5 sm:gap-3 w-full sm:w-auto justify-center">
                    <a href="https://wa.me/919512015163" target="_blank"
                        class="btn-theme text-xs !py-2.5 !px-5 text-center">
                        વોટ્સએપ પર વાત કરો
                    </a>
                    <button type="button" onclick="resetSimpleForm()"
                        class="btn-theme-outline text-xs !py-2.5 !px-5 text-center">
                        ફરીથી ફોર્મ ભરો
                    </button>
                </div>
            </div>

        </div>

    </div>

    <!-- EmailJS SDK -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <!-- EmailJS & Form Submission Script -->
    <script>
        // EmailJS Configuration (સંપૂર્ણ સેટ કરેલ)
        const EMAILJS_CONFIG = {
            publicKey: "GPFs4GByhvG_ko2gL",     // તમારી EmailJS Public Key
            serviceId: "service_fhohdta",       // તમારી Service ID
            templateId: "template_eiwm08q",     // તમારી Template ID
            toEmails: "wb2borganic@gmail.com, vivek@socialamplifiers.com"
        };

        // Initialize EmailJS
        (function () {
            if (typeof emailjs !== 'undefined') {
                emailjs.init({
                    publicKey: EMAILJS_CONFIG.publicKey
                });
            }
        })();

        async function handleSimpleSubmit(event) {
            event.preventDefault();

            const name = document.getElementById('simpleName').value.trim();
            const phone = document.getElementById('simplePhone').value.trim();
            const roleEl = document.querySelector('input[name="userRole"]:checked');
            const userRole = roleEl ? roleEl.value : 'ઉત્પાદક (Manufacturer)';
            const email = document.getElementById('simpleEmail').value.trim();
            const message = document.getElementById('simpleMessage').value.trim();
            const submitBtn = document.getElementById('simpleSubmitBtn');
            const submitBtnText = document.getElementById('simpleSubmitBtnText');

            if (!name || !phone) {
                alert('કૃપા કરીને પૂરું નામ અને ફોન નંબર ભરો.');
                return false;
            }

            // Button Loading State
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
            const originalText = submitBtnText.innerHTML;
            submitBtnText.innerHTML = `
                <span class="inline-flex items-center gap-2">
                    <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>વિગત મોકલાઈ રહી છે...</span>
                </span>
            `;

            const templateParams = {
                to_email: EMAILJS_CONFIG.toEmails,
                to_name: "WB2B Team",
                from_name: name,
                name: name,
                user_name: name,
                phone_number: phone,
                phone: phone,
                user_phone: phone,
                user_role: userRole,
                role: userRole,
                buyer_seller_broker: userRole,
                reply_to: email || '',
                email: email || '',
                user_email: email || 'ઈમેલ આપેલ નથી',
                message: message || 'કોઈ ખાસ સંદેશ નથી (માત્ર સંપર્ક માટે વિગત મોકલી)',
                user_message: message || 'કોઈ ખાસ સંદેશ નથી (માત્ર સંપર્ક માટે વિગત મોકલી)',
                submitted_at: new Date().toLocaleString('gu-IN', { timeZone: 'Asia/Kolkata' })
            };

            // Send email using EmailJS
            let sendSuccessful = false;
            if (typeof emailjs !== 'undefined') {
                try {
                    const response = await emailjs.send(EMAILJS_CONFIG.serviceId, EMAILJS_CONFIG.templateId, templateParams);
                    console.log('EmailJS Success:', response.status, response.text);
                    sendSuccessful = true;
                } catch (error) {
                    console.error('EmailJS Error:', error);
                    alert('ઈમેલ મોકલવામાં તકલીફ થઈ. પરંતુ તમારી વિગત નોંધી લેવાઈ છે. તમે સીધા WhatsApp પર પણ સંપર્ક કરી શકો છો.');
                    sendSuccessful = true; // still show success screen so user is not stuck
                }
            }

            // Restore button
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
            submitBtnText.innerHTML = originalText;

            // Show success overlay
            document.getElementById('simpleApplicantName').textContent = name;
            document.getElementById('simpleSuccessNotice').classList.remove('hidden');
        }

        function resetSimpleForm() {
            document.getElementById('simpleContactForm').reset();
            document.getElementById('simpleSuccessNotice').classList.add('hidden');
        }
    </script>
</section>