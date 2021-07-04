{{--dependecy of the master template--}}
@extends ('layouts.master')
{{--showing the title 'main'--}}
@section('title', 'Main')
{{--getting the code to repeat--}}
@section ('content')
        <h1>All products</h1>

        <div class="row">
           {{-- to apply the view of the template 'card' --}}

            @foreach($products as $product)
            @include('layouts.card', compact($product))
                @endforeach
        </div>
@endsection
