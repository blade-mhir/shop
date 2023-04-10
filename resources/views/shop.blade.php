@extends('layouts.app')

@section('content')
<x-product-list :products="$products" :admin="$admin">
    @if($admin)
        <a href="/shop/add">
            <button cla ss="btn-dark-green text-white text-uppercase border-0 py-2 px-4">Add Product</button>
        </a>
    @endif
</x-product-list>

@endsection
