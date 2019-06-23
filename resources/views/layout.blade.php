<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <!-- Container -->
    <div class="flex m-auto mt-16 w-1/3">
        <!-- Sidebar -->
        <div class="-ml-32 w-32">
            <ul>
                <li class="text-gray-700 {{ request()->is('account') ? 'font-bold' : '' }}"><a href="/account">Account</a></li>
                <li class="text-gray-700 {{ request()->is('profile') ? 'font-bold' : '' }}"><a href="/profile">Profile</a></li>
                <li class="text-gray-700 {{ request()->is('invoice') ? 'font-bold' : '' }}"><a href="/invoice">Invoices</a></li>
            </ul>
        </div>

        <!-- Body -->
        <div class="bg-white p-4 rounded w-full">
            @yield('content')
        </div>
    </div>
</body>
</html>
