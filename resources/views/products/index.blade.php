<x-header>
@include('partials._search')
<div class="container ">

    <div class="row">
        @unless (count($products) == 0)
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        @else
            <div class="col">
                <p>No product found</p>
            </div>
        @endunless
    </div>
    
</div>
</x-header>


