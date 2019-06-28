    @foreach ($invoices as $invoice)
        <!-- Invoice Row -->
        <div class="border-b border-gray-200 flex justify-between py-2">
            <h1>{{ $invoice->title }} - <strong>${{ $invoice->amount }}</strong></h1>
            <a class="text-blue-500 text-sm" href="#">Download</a>
        </div>
    @endforeach

<div
    class="flex justify-center my-4 text-blue-500"
    ic-get-from="/invoice-partial?page={{ request('page', 1)+1 }}"
    ic-trigger-on="click"
    ic-replace-target="true"
    ic-indicator="#loading"
>
    <button class="focus:outline-none">
        Show More
        <span id="loading" class="hidden">...</span>
    </button>
</div>
