<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .spinner {
            animation: spin 1.2s linear infinite;
            border: 5px solid #555;
            border-color: #555 transparent #555 transparent;
            content: " ";
            border-radius: 50%;
            display: block;
            height: 46px;
            margin: 1px;
            width: 46px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <link href="/css/tailwind.css" rel="stylesheet">
    <script src="/js/axios.js"></script>

    <!-- Turbolinks -->
    <!-- <script src="/js/turbolinks.js"></script> -->

    <!-- Intercooler -->
    <!-- <script src="/js/jquery.js"></script> -->
    <!-- <script src="/js/intercooler.js"></script> -->

    <script>
        (function() {
            if ($(document).data('ic-init')) return;
            document.addEventListener("turbolinks:render", function() {
                Intercooler.processNodes($('body'));
            })
            $(document).data('ic-init', true);
        })()
    </script>
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
        <div class="bg-white p-4 rounded w-full border">
            @yield('content')
        </div>
    </div>
</body>

</html>
