@extends('layout')

@section('content')
<h1 class="-mt-3 border-b mb-4 text-3xl">Invoices</h1>

<div ic-get-from="/invoice-partial" ic-trigger-on="load">
    <!-- Spinner -->
    <div class="block flex justify-center lds-dual-ring p-16">
        <div class="spinner"></div>
    </div>
</div>
@endsection
