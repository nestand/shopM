{{--dependecy of the master template--}}
@extends ('master')
{{--showing the title 'main'--}}
@section('title', 'Main')
{{--getting the code to repeat--}}
@section ('content')

    <div class="starter-template">
        <h1>All products</h1>

        <div class="row">
           {{-- to apply the view of the template 'card' --}}
            @include('card')
        </div>
    </div>
@endsection