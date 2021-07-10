{{--dependecy of the master template--}}
@extends ('layouts.master')
{{--showing the title--}}
@section('title', 'All the categories')
{{--getting the code to repeat--}}
@section ('content')
       {{-- to get the cat name from DB + fixed the rediraction way --}}
        @foreach ($categories as $category)
        <div class="panel">
            {{--to make the link relative (as it was absolute :) )--}}
            <a href="/{{ $category->code }}">
                <img src="{{ Storage::url($category->image) }}">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>
        @endforeach
@endsection
