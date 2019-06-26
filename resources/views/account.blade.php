@extends('layout')

@section('content')
<h1 class="-mt-3 border-b mb-4 text-3xl">Account</h1>

<div>
    <div class="mb-3">
        <label for="current" class="mb-2 block font-medium text-gray-800">Current Password</label>
        <input type="text" class="block border px-2 py-1 rounded w-full">
    </div>

    <div class="mb-3">
        <label for="current" class="mb-2 block font-medium text-gray-800">New Password</label>
        <input type="text" class="block border px-2 py-1 rounded w-full">
    </div>

    <div class="mb-3">
        <label for="current" class="mb-2 block font-medium text-gray-800">Confirm New Password</label>
        <input type="text" class="block border px-2 py-1 rounded w-full">
    </div>

    <div>
        <button type="button" class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded text-white">Update Password</button>
    </div>
</div>
@endsection
