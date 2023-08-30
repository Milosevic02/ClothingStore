@props(['product'])

<div class="col-lg-6 mb-4">
    <div class="card border rounded p-4">
        <div class="row">
            <div class="col-md-4">
                <img class="w-100" src="{{$product->image ? asset('storage/' . $product->image) 
                                    :  asset('images/no-image.png')}}" alt="">
            </div>
            <div class="col-md-8">
                <h3 class="h4">{{ $product->name }}</h3>
                <div class="h5 font-weight-bold mb-3">${{ $product->price }}</div>
                <div class="h5 font-weight-bold mb-3">Size: {{ $product->size }}</div>
                <x-tags :tagsCsv="$product->tags" />
                <div class="mt-3">
                    <a href="/products/{{ $product->id }}" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
    </div>
</div>