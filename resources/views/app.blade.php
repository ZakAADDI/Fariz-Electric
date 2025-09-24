<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fariz Electric - Électricien à Annecy (Haute-Savoie) - Installation, rénovation, dépannage</title>
    
    <!-- Meta Description -->
    <meta name="description" content="Fariz Electric, électricien à Annecy et en Haute-Savoie. Installation, rénovation et dépannage électrique. Plus de 30 ans d'expérience. Devis gratuit et interventions rapides.">
    <meta name="keywords" content="électricien Annecy, électricien Haute-Savoie, installation électrique Annecy, rénovation électrique Annecy, dépannage électrique Annecy, mise aux normes, NFC 15-100, Fariz Electric">
    <meta name="author" content="Fariz Electric">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ rtrim(config('app.url'), '/') }}{{ request()->getPathInfo() }}">
    <meta name="theme-color" content="#539254">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Fariz Electric">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="{{ rtrim(config('app.url'), '/') }}{{ request()->getPathInfo() }}">
    <meta property="og:title" content="Fariz Electric - Électricien à Annecy (Haute-Savoie)">
    <meta property="og:description" content="Électricien à Annecy et alentours. Installation, rénovation et dépannage. Devis gratuit.">
    <meta property="og:image" content="/assets/images/Logo-FarizElectric.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@farizelectric">
    <meta property="twitter:title" content="Fariz Electric - Électricien à Annecy (Haute-Savoie)">
    <meta property="twitter:description" content="Installation, rénovation et dépannage électrique. Devis gratuit à Annecy et en Haute-Savoie.">
    <meta property="twitter:image" content="/assets/images/Logo-FarizElectric.png">

    <!-- JSON-LD LocalBusiness -->
    <script type="application/ld+json">
    {!! json_encode([
      '@context' => 'https://schema.org',
      '@type' => 'Electrician',
      'name' => 'Fariz Electric',
      'url' => rtrim(config('app.url'), '/'),
      'logo' => rtrim(config('app.url'), '/') . '/assets/images/Logo-FarizElectric.png',
      'image' => rtrim(config('app.url'), '/') . '/assets/images/Logo-FarizElectric.png',
      'telephone' => '+33649819460',
      'email' => 'contact@farizelectric.fr',
      'areaServed' => ['Annecy', 'Haute-Savoie', 'Annecy-le-Vieux', 'Cran-Gevrier', 'Seynod', 'Rumilly', 'Savoie', 'Ain'],
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '34 rue François Vernex',
        'addressLocality' => 'Annecy',
        'postalCode' => '74960',
        'addressCountry' => 'FR',
      ],
      'openingHours' => 'Mo-Fr 08:00-18:00',
      'sameAs' => [
        'https://www.linkedin.com/in/fariz-ben-jaddy-5ba388212/'
      ],
    ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Material Symbols Outlined (Google) -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />

    <!-- Styles & Scripts Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
