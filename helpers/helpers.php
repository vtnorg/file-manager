<?php
require  __DIR__ . '/session.php';
require  __DIR__ . '/middleware.php';
require  __DIR__ . '/auth.php';
require  __DIR__ . '/datatable.php';
if (!function_exists('asset')) {
    function asset($path): string
    {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = 'https';
        }
        $domain = $_SERVER['HTTP_HOST'];
        return $protocol . "://" . $domain . '/' . $path;
    }
}
if (!function_exists('url')) {
    function url($uri = ''): string
    {
        $uri = $uri ?: ltrim($_SERVER['REQUEST_URI'],'/');
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = 'https';
        }
        $domain = $_SERVER['HTTP_HOST']; // Lấy tên host (domain)
        return $protocol . "://" . $domain . '/' . $uri;
    }
}