{{--dependecy of the master template--}}
@extends ('master')
{{--showing the category title--}}
@section('title', 'Category ' . $category->name)
{{--getting the code to repeat--}}
@section ('content')

    <div class="starter-template">
        <h1>
            {{-- show the cat name --}}
            {{ $category->name }}

            {{--if loop to change the cat name--}}

            {{-- @if($category == 'mobile')
                Mobile phones
            @elseif($category == 'portable')
                Portable
            @elseif($category == 'appliance')
                Appliances
            @endif --}}
        </h1>
        <p>
            {{ $category->description }}
        </p>
        <p>
            {{--function count to get the total number of the products for a category in DB--}}
            Number of products: {{$category->products->count()}}.
        </p>
        <div class="row">
            {{-- to apply the view of the template 'card' and fix undefined var: product--}}
            {{--to apply the cat filter for every product--}}
            @foreach($category->products as $product)
                @include('card', compact($product))
            @endforeach
        </div>
    </div>
@endsection
