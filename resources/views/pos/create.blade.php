@extends('layouts.app')

@section('title', 'Kasir')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Transaksi Kasir</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 shadow rounded-lg border">
                <h2 class="font-semibold text-lg">{{ $product->name }}</h2>
                <p class="text-gray-600 mt-2">Rp {{ number_format($product->price) }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection