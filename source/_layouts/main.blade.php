<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <meta property="og:url" content="{{ $page->prodUrl }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:image" content="{{ $page->prodUrl }}/assets/images/thumbnail.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="impact-report.rtp.org">
    <meta property="twitter:url" content="{{ $page->prodUrl }}">
    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">
    <meta name="twitter:image" content="{{ $page->prodUrl }}/assets/images/thumbnail.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="/2021/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/2021/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/2021/assets/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#000">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MG6GRWCE4F"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-MG6GRWCE4F');
    </script>
  </head>
  <body class="text-black bg-gray font-sans antialiased">
    @yield('body')
  </body>
</html>
