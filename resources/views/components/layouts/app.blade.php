<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
   
    <title>Document</title>
</head>
<body>
<img src="{{ asset('assets/background.jpg') }}" class="bg-no-repeat object-contain blur-sm absolute -z-10 h-screen bg-fixed" />
    < x-header />
    {{ $slot }}
    < x-footer />
    @livewireScripts
</body>
</html>