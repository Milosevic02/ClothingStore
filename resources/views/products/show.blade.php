<x-header>
@include('partials._hero')
<a href="/" class="btn btn-primary">
    <i class="fas fa-arrow-left"></i> Back
  </a>
<div class="container">
<div class="row">
    <div class="col-lg-6">
        <img  src="{{$product->image ? asset('storage/' . $product->image) 
        :  asset('images/no-image.png')}}" class="image-fluid" style = "height:330px; object-fit:cover;width:450px"  />
    </div>
    <div class="col-lg-6">
        <h2>{{$product['name']}}</h2>
        <x-tags :tagsCsv="$product->tags" />

        <h5>
            <p style="font-weight: bold;">Price: ${{$product['price']}}</p>

        </h5>
        <h5>
            <p style="font-weight: bold;">Size: {{$product['size']}}</p>

        </h5>

        @auth
            @can('admin')
            <div class="d-flex">
                <a href="/products/{{$product->id}}/edit" class="btn btn-warning btn-lg" style="margin-right: 10px">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <form method="POST" action="/products/{{$product->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-lg">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </form>     
            </div> 
            @else
                <form action="" method = "post">
                    @csrf
                    <input type="number" name="quantity" required style="background-color: #f1f1f1; border: 1px solid #ccc; padding: 5px;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add to Cart</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to continue shopping or go to the cart?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name = "cart" >Go to cart</button>
                                <button type="submit" class="btn btn-primary" name = "continue">Continue</button>
                            </div>
                            </div>
                        </div>
                        </div>
                </form>
            @endcan

        @endauth

    </div>
</div>
</div>
</x-header>