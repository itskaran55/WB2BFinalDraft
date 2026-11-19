<?php
/**
 * WB2B - Meetings & Events Gallery Section
 * Dynamically loads and displays images categorized by their exact folder name.
 */

// Define the exact list of folders in chronological order
$curatedFolders = [
    'WB2B FIRST MEETING',
    'WB2B SECOND PHASE',
    'WB2B THIRD PHASE',
    'WB2B FOURTH PHASE',
    'WB2B FIFTH PHASE',
    'WB2B SIXTH PHASE',
    'WB2B SEVEN PHASE',
    'WB2B 9TH MEETING',
    'WB2B AI EVENT',
    'WB2B UDAIPUR MEETING'
];

// Fallback image registry in case serverless filesystem scanning is restricted
$fallbackRegistry = [
    'WB2B FIRST MEETING' => [
        '1773043812154-WhatsApp Image 2026-03-09 at 1.18.45 PM (6).jpeg',
        '1773043850080-WhatsApp Image 2026-03-09 at 1.18.45 PM (5).jpeg',
        '1773043870934-WhatsApp Image 2026-03-09 at 1.18.45 PM (4).jpeg',
        '1773043892888-WhatsApp Image 2026-03-09 at 1.18.45 PM (3).jpeg',
        '1773043913073-WhatsApp Image 2026-03-09 at 1.18.45 PM (2).jpeg',
        '1773043932058-WhatsApp Image 2026-03-09 at 1.18.45 PM (1).jpeg',
        '1773043951531-WhatsApp Image 2026-03-09 at 1.18.45 PM.jpeg',
        '1773043983856-WhatsApp Image 2026-03-09 at 1.18.44 PM.jpeg'
    ],
    'WB2B SECOND PHASE' => [
        '1773034313966-WhatsApp Image 2026-03-09 at 10.55.58 AM.jpeg',
        '1773034368018-WhatsApp Image 2026-03-09 at 10.55.57 AM.jpeg',
        '1773034427828-WhatsApp Image 2026-03-09 at 10.55.56 AM (1).jpeg',
        '1773034479650-WhatsApp Image 2026-03-09 at 10.55.58 AM (1).jpeg',
        '1773034553148-WhatsApp Image 2026-03-09 at 10.55.59 AM (1).jpeg',
        '1773034628264-WhatsApp Image 2026-03-09 at 10.55.59 AM (2).jpeg',
        '1773039077862-WhatsApp Image 2026-03-09 at 12.18.32 PM.jpeg'
    ],
    'WB2B THIRD PHASE' => [
        '1773034828257-WhatsApp Image 2026-03-09 at 11.08.30 AM.jpeg',
        '1773034886517-WhatsApp Image 2026-03-09 at 11.08.31 AM.jpeg',
        '1773034917855-WhatsApp Image 2026-03-09 at 11.08.31 AM (1).jpeg',
        '1773034943809-WhatsApp Image 2026-03-09 at 11.08.31 AM (2).jpeg',
        '1773035005350-WhatsApp Image 2026-03-09 at 11.08.31 AM (3).jpeg'
    ],
    'WB2B FOURTH PHASE' => [
        '1773035056824-WhatsApp Image 2026-03-09 at 11.09.18 AM.jpeg',
        '1773035183685-WhatsApp Image 2026-03-09 at 11.09.19 AM.jpeg',
        '1773035227241-WhatsApp Image 2026-03-09 at 11.09.19 AM (1).jpeg',
        '1773035259276-WhatsApp Image 2026-03-09 at 11.09.19 AM (2).jpeg',
        '1773035302704-WhatsApp Image 2026-03-09 at 11.09.20 AM.jpeg',
        '1773035343005-WhatsApp Image 2026-03-09 at 11.09.20 AM (1).jpeg'
    ],
    'WB2B FIFTH PHASE' => [
        '1773035570097-WhatsApp Image 2026-03-09 at 11.18.59 AM.jpeg',
        '1773035619109-WhatsApp Image 2026-03-09 at 11.19.04 AM.jpeg',
        '1773035645855-WhatsApp Image 2026-03-09 at 11.19.04 AM (1).jpeg',
        '1773035669467-WhatsApp Image 2026-03-09 at 11.19.05 AM.jpeg',
        '1773035717213-WhatsApp Image 2026-03-09 at 11.20.11 AM.jpeg'
    ],
    'WB2B SIXTH PHASE' => [
        '1773037018906-1.jpg',
        '1773037034930-2.jpg',
        '1773037046508-3.jpg',
        '1773037063967-4.jpg',
        '1773037079098-5.jpg'
    ],
    'WB2B SEVEN PHASE' => [
        '1776065929582-WhatsApp Image 2026-04-13 at 12.00.10 PM.jpeg',
        '1776065969152-WhatsApp Image 2026-04-13 at 12.00.19 PM.jpeg',
        '1776069498876-WhatsApp Image 2026-04-13 at 12.00.10 PM (1).jpeg',
        '1776069905745-WhatsApp Image 2026-04-13 at 12.00.16 PM.jpeg',
        '1776069969052-WhatsApp Image 2026-04-13 at 12.00.13 PM.jpeg',
        '1776406638093-WhatsApp Image 2026-04-13 at 11.56.44 AM.jpeg'
    ],
    'WB2B 9TH MEETING' => [
        '1780307729890-WhatsApp Image 2026-05-31 at 9.01.19 AM.jpeg',
        '1780307827218-WhatsApp Image 2026-05-31 at 9.01.20 AM.jpeg',
        '1780307894390-WhatsApp Image 2026-05-31 at 9.01.19 AM (1).jpeg',
        '1780307956853-WhatsApp Image 2026-05-31 at 9.01.13 AM.jpeg',
        '1780308041556-WhatsApp Image 2026-05-31 at 9.01.19 AM (2).jpeg',
        '1780308278992-WhatsApp Image 2026-05-31 at 9.01.15 AM (1).jpeg'
    ],
    'WB2B AI EVENT' => [
        '1773035682533-WhatsApp Image 2026-03-09 at 11.21.16 AM.jpeg',
        '1773035786292-WhatsApp Image 2026-03-09 at 11.21.16 AM (1).jpeg',
        '1773035839730-WhatsApp Image 2026-03-09 at 11.21.16 AM (2).jpeg',
        '1773035895940-WhatsApp Image 2026-03-09 at 11.21.17 AM.jpeg',
        '1773035951966-WhatsApp Image 2026-03-09 at 11.21.17 AM (1).jpeg',
        '1773036008488-WhatsApp Image 2026-03-09 at 11.21.18 AM.jpeg'
    ],
    'WB2B UDAIPUR MEETING' => [
        '1788349374463-WB2B UDAIPUR MEETING COLLABE.png',
        '1788349607110-1..jpeg',
        '1788349636370-13..jpeg',
        '1788349656203-WhatsApp Image 2026-09-02 at 5.14.32 PM.jpeg',
        '1788349690698-WhatsApp Image 2026-09-02 at 5.15.45 PM.jpeg',
        '1788349716202-WhatsApp Image 2026-09-02 at 5.15.45 PM (1).jpeg'
    ]
];

// Scan assets directory dynamically, or fall back to registry
$assetsBasePath = realpath(__DIR__ . '/../../assets');
if (!$assetsBasePath) {
    $assetsBasePath = __DIR__ . '/../../assets';
}

$eventsData = [];
$totalImageCount = 0;

// Scan each curated folder first
foreach ($curatedFolders as $folderName) {
    $folderPath = $assetsBasePath . '/' . $folderName;
    $files = [];

    if (is_dir($folderPath)) {
        $scanned = @scandir($folderPath);
        if ($scanned !== false) {
            foreach ($scanned as $item) {
                if ($item === '.' || $item === '..') continue;
                $ext = strtolower(pathinfo($item, PATHINFO_EXTENSION));
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                    $files[] = $item;
                }
            }
        }
    }

    // Fall back to pre-indexed list if directory scan returns empty
    if (empty($files) && isset($fallbackRegistry[$folderName])) {
        $files = $fallbackRegistry[$folderName];
    }

    if (!empty($files)) {
        $eventsData[$folderName] = $files;
        $totalImageCount += count($files);
    }
}

// Check for any newly added folders in assets directory not yet in curated list
if (is_dir($assetsBasePath)) {
    $allDirs = @scandir($assetsBasePath);
    if ($allDirs !== false) {
        foreach ($allDirs as $d) {
            if ($d === '.' || $d === '..') continue;
            if (is_dir($assetsBasePath . '/' . $d) && !isset($eventsData[$d])) {
                $subFiles = [];
                $subScanned = @scandir($assetsBasePath . '/' . $d);
                if ($subScanned !== false) {
                    foreach ($subScanned as $item) {
                        if ($item === '.' || $item === '..') continue;
                        $ext = strtolower(pathinfo($item, PATHINFO_EXTENSION));
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                            $subFiles[] = $item;
                        }
                    }
                }
                if (!empty($subFiles)) {
                    $eventsData[$d] = $subFiles;
                    $totalImageCount += count($subFiles);
                }
            }
        }
    }
}
?>

<!-- Section: Meetings & Events Gallery -->
<section id="events" class="py-14 sm:py-20 lg:py-24 bg-white border-b border-slate-200/80 relative overflow-hidden">
    <!-- Subtle Background Elements -->
    <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:28px_28px] opacity-50 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 text-blue-800 font-bold text-[11px] sm:text-xs uppercase tracking-wider border border-blue-200 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                <span>Events & Meetings Gallery</span>
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 mt-3.5 leading-tight tracking-tight">
                Glimpses of WB2B Network Growth & Meetings
            </h2>
            <p class="mt-3 sm:mt-4 text-sm sm:text-base text-slate-600 font-medium leading-relaxed">
                Browse official images and key moments from all our phases, conferences, and stakeholder meetings. Select any folder below to view only its photos.
            </p>
        </div>

        <!-- Filter Navigation Tabs (Exact Folder Names) -->
        <div class="mb-8 sm:mb-10">
            <!-- Scrollable Tab Container on Mobile -->
            <div class="flex items-center gap-2 sm:gap-2.5 overflow-x-auto pb-3 pt-1 px-1 no-scrollbar md:flex-wrap md:justify-center">
                <!-- All Button -->
                <button type="button"
                        onclick="filterGallery('all', this)"
                        class="gallery-filter-btn active shrink-0 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-bold transition-all duration-200 bg-blue-600 text-white shadow-md shadow-blue-600/25 border border-blue-600 cursor-pointer">
                    <span>All Meetings & Events</span>
                    <span class="ml-1.5 px-2 py-0.5 rounded-full bg-white/20 text-[11px] font-extrabold"><?php echo $totalImageCount; ?></span>
                </button>

                <?php foreach ($eventsData as $folderName => $images): ?>
                    <?php 
                        $slug = 'folder_' . substr(md5($folderName), 0, 8);
                        $count = count($images);
                    ?>
                    <button type="button"
                            onclick="filterGallery('<?php echo $slug; ?>', this)"
                            data-folder-slug="<?php echo $slug; ?>"
                            class="gallery-filter-btn shrink-0 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-bold transition-all duration-200 bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-200/80 cursor-pointer">
                        <span><?php echo htmlspecialchars($folderName); ?></span>
                        <span class="ml-1.5 px-2 py-0.5 rounded-full bg-slate-200 text-slate-700 text-[11px] font-bold"><?php echo $count; ?></span>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div id="galleryGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-5 lg:gap-6">
            <?php 
            $globalIndex = 0;
            foreach ($eventsData as $folderName => $images): 
                $slug = 'folder_' . substr(md5($folderName), 0, 8);
                $folderCount = count($images);
                foreach ($images as $imgIdx => $imgName):
                    $encodedUrl = '/assets/' . rawurlencode($folderName) . '/' . rawurlencode($imgName);
                    $itemIndex = $globalIndex++;
            ?>
                <div class="gallery-item group relative rounded-2xl overflow-hidden bg-slate-100 border border-slate-200/90 shadow-xs hover:shadow-xl hover:shadow-blue-900/10 hover:border-blue-300 transition-all duration-300 cursor-pointer"
                     data-folder="<?php echo $slug; ?>"
                     data-folder-name="<?php echo htmlspecialchars($folderName, ENT_QUOTES); ?>"
                     data-img-src="<?php echo $encodedUrl; ?>"
                     data-item-index="<?php echo $itemIndex; ?>"
                     onclick="openLightbox(<?php echo $itemIndex; ?>)">

                    <!-- Aspect Ratio Box -->
                    <div class="aspect-[4/3] w-full overflow-hidden bg-slate-200 relative">
                        <img src="<?php echo $encodedUrl; ?>" 
                             alt="<?php echo htmlspecialchars($folderName); ?> - Photo <?php echo $imgIdx + 1; ?>"
                             loading="lazy"
                             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">

                        <!-- Folder Name Badge (Always visible on card) -->
                        <div class="absolute top-2.5 left-2.5 z-10 pointer-events-none">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-slate-900/80 text-white font-extrabold text-[10px] sm:text-[11px] tracking-wide backdrop-blur-md shadow-sm border border-white/10 max-w-[180px] sm:max-w-none truncate">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400 shrink-0"></span>
                                <span class="truncate"><?php echo htmlspecialchars($folderName); ?></span>
                            </span>
                        </div>

                        <!-- Hover Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/75 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-between p-3 sm:p-4">
                            <div class="text-white">
                                <p class="text-[11px] sm:text-xs font-medium text-slate-300">Photo <?php echo ($imgIdx + 1) . ' of ' . $folderCount; ?></p>
                                <p class="text-xs sm:text-sm font-bold text-white truncate max-w-[150px] sm:max-w-[200px]"><?php echo htmlspecialchars($folderName); ?></p>
                            </div>
                            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            <?php 
                endforeach;
            endforeach; 
            ?>
        </div>

        <!-- Interactive Lightbox Modal -->
        <div id="galleryLightbox" 
             class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-md flex flex-col items-center justify-between p-4 sm:p-6"
             onclick="handleLightboxBackdrop(event)">

            <!-- Lightbox Top Bar -->
            <div class="w-full max-w-5xl flex items-center justify-between text-white py-2 z-20">
                <div class="flex items-center gap-3">
                    <span id="lightboxFolderBadge" class="px-3 py-1 rounded-lg bg-blue-600 text-white font-extrabold text-xs sm:text-sm tracking-wide shadow-sm">
                        WB2B
                    </span>
                    <span id="lightboxCounter" class="text-xs sm:text-sm text-slate-300 font-medium">
                        1 / <?php echo $totalImageCount; ?>
                    </span>
                </div>
                <button type="button" 
                        onclick="closeLightbox()" 
                        class="p-2 rounded-xl bg-white/10 hover:bg-white/20 text-white transition active:scale-95"
                        aria-label="Close Lightbox">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Lightbox Main Image Stage -->
            <div class="relative w-full max-w-5xl flex-1 flex items-center justify-center my-2 sm:my-4 overflow-hidden">
                <!-- Previous Button -->
                <button type="button" 
                        id="lightboxPrevBtn"
                        onclick="prevLightbox(event)" 
                        class="absolute left-2 sm:left-4 z-20 p-2.5 sm:p-3 rounded-full bg-slate-900/70 hover:bg-blue-600 text-white backdrop-blur-sm transition-all duration-200 active:scale-90 border border-white/10"
                        aria-label="Previous Photo">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Active Image -->
                <img id="lightboxImg" 
                     src="" 
                     alt="WB2B Event Photo" 
                     class="max-h-[75vh] max-w-full object-contain rounded-xl shadow-2xl transition-all duration-200">

                <!-- Next Button -->
                <button type="button" 
                        id="lightboxNextBtn"
                        onclick="nextLightbox(event)" 
                        class="absolute right-2 sm:right-4 z-20 p-2.5 sm:p-3 rounded-full bg-slate-900/70 hover:bg-blue-600 text-white backdrop-blur-sm transition-all duration-200 active:scale-90 border border-white/10"
                        aria-label="Next Photo">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Lightbox Bottom Caption -->
            <div class="w-full max-w-5xl text-center text-slate-300 text-xs sm:text-sm font-medium py-1">
                <span id="lightboxFolderNameText"></span> • Use Arrow Keys &larr; &rarr; to navigate or ESC to close
            </div>

        </div>

    </div>
</section>

<!-- Gallery Filter & Lightbox Interactive Script -->
<script>
    let currentFilteredItems = [];
    let activeLightboxIndex = 0;

    // Collect all gallery items on DOM ready
    function getGalleryItems() {
        return Array.from(document.querySelectorAll('.gallery-item'));
    }

    // Filter by Folder Name
    function filterGallery(folderSlug, btnElement) {
        // Update active tab buttons
        document.querySelectorAll('.gallery-filter-btn').forEach(btn => {
            btn.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-md', 'shadow-blue-600/25', 'border-blue-600');
            btn.classList.add('bg-slate-100', 'text-slate-700', 'border-slate-200/80');
            const badge = btn.querySelector('span:last-child');
            if (badge) {
                badge.classList.remove('bg-white/20');
                badge.classList.add('bg-slate-200', 'text-slate-700');
            }
        });

        btnElement.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-md', 'shadow-blue-600/25', 'border-blue-600');
        btnElement.classList.remove('bg-slate-100', 'text-slate-700', 'border-slate-200/80');
        const activeBadge = btnElement.querySelector('span:last-child');
        if (activeBadge) {
            activeBadge.classList.add('bg-white/20');
            activeBadge.classList.remove('bg-slate-200', 'text-slate-700');
        }

        const items = getGalleryItems();
        currentFilteredItems = [];

        items.forEach(item => {
            const itemFolder = item.getAttribute('data-folder');
            if (folderSlug === 'all' || itemFolder === folderSlug) {
                item.style.display = '';
                currentFilteredItems.push(item);
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Initialize filtered list on start
    document.addEventListener('DOMContentLoaded', () => {
        currentFilteredItems = getGalleryItems();
    });

    // Open Lightbox
    function openLightbox(itemIndex) {
        if (!currentFilteredItems.length) {
            currentFilteredItems = getGalleryItems().filter(el => el.style.display !== 'none');
        }

        const targetEl = document.querySelector(`.gallery-item[data-item-index="${itemIndex}"]`);
        if (!targetEl) return;

        activeLightboxIndex = currentFilteredItems.indexOf(targetEl);
        if (activeLightboxIndex === -1) activeLightboxIndex = 0;

        updateLightboxView();

        const modal = document.getElementById('galleryLightbox');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    // Update Lightbox Display
    function updateLightboxView() {
        if (!currentFilteredItems.length) return;
        const currentItem = currentFilteredItems[activeLightboxIndex];
        if (!currentItem) return;

        const imgSrc = currentItem.getAttribute('data-img-src');
        const folderName = currentItem.getAttribute('data-folder-name');

        const imgEl = document.getElementById('lightboxImg');
        const badgeEl = document.getElementById('lightboxFolderBadge');
        const counterEl = document.getElementById('lightboxCounter');
        const captionText = document.getElementById('lightboxFolderNameText');

        imgEl.src = imgSrc;
        imgEl.alt = folderName;
        badgeEl.textContent = folderName;
        captionText.textContent = folderName;
        counterEl.textContent = (activeLightboxIndex + 1) + ' / ' + currentFilteredItems.length;
    }

    // Previous Lightbox Photo
    function prevLightbox(e) {
        if (e) e.stopPropagation();
        if (currentFilteredItems.length === 0) return;
        activeLightboxIndex = (activeLightboxIndex - 1 + currentFilteredItems.length) % currentFilteredItems.length;
        updateLightboxView();
    }

    // Next Lightbox Photo
    function nextLightbox(e) {
        if (e) e.stopPropagation();
        if (currentFilteredItems.length === 0) return;
        activeLightboxIndex = (activeLightboxIndex + 1) % currentFilteredItems.length;
        updateLightboxView();
    }

    // Close Lightbox
    function closeLightbox() {
        const modal = document.getElementById('galleryLightbox');
        modal.classList.add('hidden');
        document.body.style.overflow = '';
        const imgEl = document.getElementById('lightboxImg');
        imgEl.src = '';
    }

    // Backdrop Click
    function handleLightboxBackdrop(event) {
        if (event.target.id === 'galleryLightbox') {
            closeLightbox();
        }
    }

    // Keyboard Shortcuts (Arrow keys & ESC)
    document.addEventListener('keydown', (e) => {
        const modal = document.getElementById('galleryLightbox');
        if (!modal || modal.classList.contains('hidden')) return;

        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            prevLightbox();
        } else if (e.key === 'ArrowRight') {
            nextLightbox();
        }
    });
</script>
