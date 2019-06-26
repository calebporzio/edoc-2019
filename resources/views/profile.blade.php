@extends('layout')

@section('content')
<h1 class="-mt-3 border-b mb-4 text-3xl">Profile</h1>

<div class="flex">
    <div class="pr-5 w-4/5"><img class="rounded-full" src="/headshot.jpg" alt=""></div>

    <div>
        <h1 class="text-2xl text-black">Caleb Porzio</h1>
        <h2 class="mb-3 text-gray-700 text-lg">Freelance Developer</h2>
        <p class="text-gray-900 text-xs">Hey EDoC! This message is probably too small and fleeting for you to be able to read, so I suppose I'll just end it.</p>
    </div>
</div>
@endsection
