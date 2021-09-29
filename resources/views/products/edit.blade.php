@extends('layouts.prod_layout')

@section('title', 'Edit Product')

@section('content')

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @method('patch')
    @csrf
    <label for="name">Name</label><br />
    <input type="text" name="name" id="name" autocomplete="off" value="{{ $product->name }}" /><br />
    <label for="amount">Amount</label><br />
    <input type="text" name="amount" id="amount" autocomplete="off" value="{{ $product->amount }}" /><br /><br />
    <button>Submit</button>

</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif 

@endsection

@section('footer')
<a href="/products">Back</a>
@endsection