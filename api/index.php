<?php
/**
 * WB2B - પશુ આહાર B2B નેટવર્ક
 * Main Home Page Entry Point
 */

// 1. Layout Header
require_once __DIR__ . '/../include/layout/header.php';

echo '<main class="pt-16 sm:pt-20">';

// 2. Section 1: Hero Section (Includes 3 quick category cards)
require_once __DIR__ . '/../include/home/hero.php';

// 3. Section 2: WB2B નું મહત્વ (Importance of WB2B)
require_once __DIR__ . '/../include/home/importance.php';

// 4. Section 3: સંપર્ક ફોર્મ (Simple Contact Form: Name, Phone, Email)
require_once __DIR__ . '/../include/home/contact.php';

echo '</main>';

// 5. Layout Footer
require_once __DIR__ . '/../include/layout/footer.php';
?>
