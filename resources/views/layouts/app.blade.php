<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>App</title>
</head>
<body class="font-poppins bg-gray-100">
    <div class="flex min-h-screen">
        @include('components.sidebar')
        <div class="flex flex-col flex-1">
            <main class="flex min-h-screen flex-col">
                @yield('dashboard')
                @yield('profile')
                @yield('pengelolaan')
            </main>
             @include('components.footer')
        </div>
    </div>
</body>
</html>
