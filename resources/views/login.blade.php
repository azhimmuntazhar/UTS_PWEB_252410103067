<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body class="font-poppins">
    <main class="flex items-center justify-center min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/wallpaper.gif') }}');">
        <div class="bg-white p-7 rounded-3xl shadow-md w-full max-w-sm">
            <h1 class="text-2xl font-bold text-center">Login Disini Ketua</h1>
            <p class="text-gray-600 m-4 text-center">Masukkan username dan password untuk masuk ke dashboard</p>
            <form action="/dashboard" method="GET" class="space-y-4">
                <div>
                    <input type="username" name="username" id="username" required placeholder="Username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm">
                </div>
                <div>
                    <input type="password" name="password" id="password" required placeholder="Password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm">
                </div>
                <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Login</button>
            </form>
        </div>
    </main>
</body>
</html>
