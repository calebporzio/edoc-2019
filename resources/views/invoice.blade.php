@extends('layout')

@section('content')
<h1 class="-mt-3 border-b mb-4 text-3xl">Invoices</h1>

<div>
    @foreach ($invoices as $invoice)
        <!-- Invoice Row -->
        <div class="border-b border-gray-200 flex justify-between py-2">
            <h1>{{ $invoice->title }} - <strong>${{ $invoice->amount }}</strong></h1>
            <a class="text-blue-500 text-sm" href="#">Download</a>
        </div>
    @endforeach
</div>
@endsection
