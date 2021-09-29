@extends('layouts.prod_layout')

@section('title', 'Show Product')

@section('content')
<div class="product">
    <div>ID: {{ $product->id }}</div>
    <div>Name: {{ $product->name }}</div>
    <div>Amount: {{ $product->amount }}</div>
</div>
@endsection

@section('footer')
<a href="/products">Back</a> |
<a href="{{ route('products.edit',$product->id) }}">Edit</a>
<a href="/products/{{ $product->id }}">Edit</a>
<form action="{{ route('products.destroy',$product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</form>
@endsection