<!-- resources/views/shops/list.blade.php -->
@extends('layouts.main')

@section('title', $title)

@section('content')
<main>
    <table class="app-cmp-data-list">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Owner</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td>
                    <a href="{{ route('shops.view', ['shopCode' => $shop->code]) }}" class="shop-link">
                        {{ $shop->code }}
                    </a>
                    
                    
                </td>
                <td>{{ $shop->name }}</td>
                <td>{{ $shop->owner }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
