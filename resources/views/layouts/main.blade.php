<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel Worldwide Meetup</title>
    <meta name="title" content="Next event: 28 Sep at 19:00 GMT+1, with Adel Fayzrakhmanov and Yaz Jallad">
    <meta name="description" content="Join the official Laravel meetup in the cloud. Learn from various familiar and new speakers. Chat with your fellow artisans.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#f05252">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#f05252">
    <meta name="theme-color" content="#f05252">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}?2009">
    <meta property="og:title" content="Next event: 28 Sep at 19:00 GMT+1, with Adel Fayzrakhmanov and Yaz Jallad">
    <meta property="og:description" content="Join the official Laravel meetup in the cloud. Learn from various familiar and new speakers. Chat with your fellow artisans.">
    <meta property="og:image" content="{{ asset('/img/socialcard.jpg') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}?2009">
    <meta property="twitter:title" content="Next event: 28 Sep at 19:00 GMT+1, with Adel Fayzrakhmanov and Yaz Jallad">
    <meta property="twitter:description" content="Join the official Laravel meetup in the cloud. Learn from various familiar and new speakers. Chat with your fellow artisans.">
    <meta property="twitter:image" content="{{ asset('/img/socialcard.jpg') }}">
    <script defer src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50">

<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"/>
            </svg>
        </div>
    </div>

    <div class="relative py-6">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center sm:h-10 justify-center">
                <x-navigation/>
            </nav>
        </div>
        {{ $extraHeader ?? '' }}
    </div>
</div>

{{ $slot }}

<div class="bg-50">
    <div class="max-w-screen-xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
            <x-navigation/>
        </nav>
    </div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171308417-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-171308417-1');
</script>

</body>
</html>
