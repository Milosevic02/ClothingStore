<x-header>
@include('partials._hero')
<a href="/" class="btn btn-primary">
    <i class="fas fa-arrow-left"></i> Back
  </a>
<div class="container">
<div class="row">
    <div class="col-lg-6">
        <img  src="{{ asset('images/no-image.png') }}" class="image-fluid" style = "height:330px; object-fit:cover;width:450px"  >
    </div>
    <div class="col-lg-6">
        <h2>{{$product['name']}}</h2>
        <x-tags :tagsCsv="$product->tags" />

        <h5>
            <p style="font-weight: bold;">Price: ${{$product['price']}}</p>

        </h5>
        <form action="" method = "post">
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
    </div>
</div>
</div>
</x-header>