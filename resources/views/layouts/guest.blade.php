<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Full Bed') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    <script>
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="root" dir="{{(app()->getLocale() == 'ar' ? 'rtl' : 'ltr')}}" class="overflow-hidden">
<div id="loader">
    <div class="lds-facebook"><div></div><div></div><div></div></div>
</div>
<div  class="min-h-screen font-sans text-gray-900 antialiased bg-gray-50/50 dark:bg-gray-900 flex flex-col">
    @include('front.includes.navigation-menu')
    {{$slot}}
    @include('front.includes.footer')
</div>
<script>
    let themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    let themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    if (themeToggleDarkIcon && themeToggleLightIcon) {
        if (localStorage.getItem('color-theme') === 'light' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            themeToggleDarkIcon.classList.remove('hidden');
            document.getElementById('root').classList.remove('dark')
        } else {
            document.getElementById('root').classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
        }
        let themeToggleBtn = document.getElementById('theme-toggle');
        if (themeToggleBtn)
            themeToggleBtn.addEventListener('click', function () {
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.getElementById("root").classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.getElementById("root").classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }
                } else {
                    if (document.getElementById("root").classList.contains('dark')) {
                        document.getElementById("root").classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.getElementById("root").classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            });

    }
</script>
<script>
    window.onload = function (){
        @stack("onloadjs")
        let loader = document.getElementById('loader');
        let root = document.getElementById('root');
        if(loader){
            if(root){
                root.classList.remove('overflow-hidden')
            }
            loader.style.display = 'none';
        }
    }

</script>
@stack('js')
</body>
</html>
