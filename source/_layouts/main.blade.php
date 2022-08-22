<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
		<link rel="manifest" href="/assets/images/site.webmanifest">
        
        <title>{{ $page->title }}</title>
        
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
	    @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
                
    </body>
</html>
