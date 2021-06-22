{{--dependecy of the master template--}}
@extends ('master')
{{--showing the title--}}
@section('title', 'All the categories')
{{--getting the code to repeat--}}
@section ('content')

    <div class="starter-template">
        {{-- to get the cat name from DB + fixed the rediraction way --}}
        @foreach ($categories as $category)
        <div class="panel">
            {{--to make the link relative (as it was absolute :) )--}}
            <a href="/{{ $category->code }}">
                <img src="/storage/categories/mobile.jpg">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>   
        @endforeach
    </div>
@endsection