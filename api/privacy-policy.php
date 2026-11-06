<?php
// Set base path relative to this file
$baseDir = __DIR__ . '/..';

// 1. Render Header
require_once $baseDir . '/include/layout/header-eng.php';

// 2. Render Privacy Policy Body
require_once $baseDir . '/include/home/privacy-policy.php';

// 3. Render Footer
require_once $baseDir . '/include/layout/footer-eng.php';