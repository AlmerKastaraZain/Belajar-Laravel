<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        
    </title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 dark:bg-slate-950">
    <x-nav />

    <div class="max-w-6xl mx-auto box-border mt-4 box-border">   
        {{ $slot }}
    </div>
</body>
</html>