<?php
/**
 * WB2B - પશુ આહાર B2B નેટવર્ક
 * Main Home Page Entry Point
 */

// 1. Layout Header
require_once __DIR__ . '/../include/layout/header-eng.php';

echo '<main class="pt-16 sm:pt-20">';

// 2. Section 1: Hero Section (Includes 3 quick category cards)
require_once __DIR__ . '/../include/home/privacy-policy.php';

echo '</main>';

// 5. Layout Footer
require_once __DIR__ . '/../include/layout/footer-eng.php';
?>
