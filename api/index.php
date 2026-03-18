<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
  '/' => 'home.php',
  '/help' => 'help.php',
  '/privacy-policy' => 'privacy-policy.php',
  '/roadmap' => 'roadmap.php',
];

$file = $routes[$path] ?? '404.php';

if ($file === '404.php') {
  http_response_code(404);
}

// ===== Layout atas =====
include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/navbar.php";

// ===== Konten halaman =====
include __DIR__ . "/" . $file;

// ===== Layout bawah =====
include __DIR__ . "/includes/footer.php";
include __DIR__ . "/includes/foot.php";