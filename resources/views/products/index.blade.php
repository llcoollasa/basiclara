@extends('layouts.prod_layout')

@section('title', 'All Products Index')

@section('content')

@forelse ($products as $product)
<a href="{{ route('products.show',$product->id) }}">
    <div class="product">
        <div>ID: {{ $product->id }}</div>
        <div>Name: {{ $product->name }}</div>
        <div>Amount: {{ $product->amount }}</div>
    </div>
</a>
@empty
No Products found
@endforelse

@endsection

@section('footer')
<a href="{{ route('products.create') }}">Create New</a>
@endsection