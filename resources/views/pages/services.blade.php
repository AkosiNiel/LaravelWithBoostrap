@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $title }}</h1>

    @if (count($services) > 0)
        <ul class="list-group mt-3">
            @foreach ($services as $service)
                <li class="list-group-item">
                    {{ $service }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No services available.</p>
    @endif
</div>
@endsection
