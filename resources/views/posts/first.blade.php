@extends('layouts.app')

@section('title', 'Some Title')

@section('content')
<article>
    <h1><a href="/posts/1">Post one</a></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus omnis id sapiente quis repellendus suscipit
        eligendi quae assumenda totam! Voluptas expedita quasi magnam, cumque quo pariatur odit. Facere, molestias
        dolorum.</p>
    <p @class(["alert-danger" => $err])>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus omnis id sapiente quis repellendus suscipit
        eligendi quae assumenda totam! Voluptas expedita quasi magnam, cumque quo pariatur odit. Facere, molestias
        dolorum.</p>
</article>
@include('nav', ["separator" => "|"])


{{-- @each('nav', [1,2,3,4,5], 'job') --}}

{{-- @php  echo "lasantha indrajith" @endphp --}}


<x-package-navigation message-param="Practice makes perfect">
    Some additional information
</x-package-navigation>

@endsection


