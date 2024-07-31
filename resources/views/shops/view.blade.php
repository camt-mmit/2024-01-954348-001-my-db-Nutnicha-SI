<!-- resources/views/shops/view.blade.php -->
@extends('layouts.main')

@section('title', $title)

@section('content')
<main>
    <dl class="app-cmp-data-detail">
        <dt>Code</dt>
        <dd>{{ $shop->code }}</dd>
        <dt>Name</dt>
        <dd>{{ $shop->name }}</dd>
        <dt>Owner</dt>
        <dd>{{ $shop->owner }}</dd>
        <dt>Location</dt>
        <dd>{{ $shop->latitude}} , {{ $shop->longitude}}</dd> <!-- Ensure the property names match your model -->
        <dt>Address</dt>
        <dd>{{ $shop->address }}</dd> <!-- Ensure the property names match your model -->
    </dl>
</main>
@endsection
