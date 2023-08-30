<x-header>
    <div class="container">
        <h1 class="mt-5 mb-3">Edit Product</h1>
        @csrf
        <form method="post" action="/products/{{$product->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id = "name" name = "name" value="{{$product->name}}" >
                @error('name')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>
    
            <div class="form-group mb-3">
                <label for="tags">Tags (Comma Separated)</label>
                <input type="text" class = "form-control" id = "tags" name = "tags" value="{{$product->tags}}" >
                @error('tags')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>
    
            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="text" class = "form-control" id = "price" name = "price" value="{{$product->price}}">
                @error('price')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="size">Size:</label>
                <input type="text" class = "form-control" id = "size" name = "size" value="{{$product->size}}">
                @error('size')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="image">Image:</label>
                
                <input type="file" class = "form-control" id = "image" name = "image" />
                <img  src="{{$product->image ? asset('storage/' . $product->image) 
                :  asset('images/no-image.png')}}" class="image-fluid" style = "height:230px; object-fit:cover;width:350px"  />
 
                @error('image')
                    <p class="text-danger mt-1">{{$message}}</p>    
                @enderror
            </div>

            <button type="submit" class="btn btn-warning btn-lg" style="margin-left:50px;margin-bottom:20px">Edit product</button>
</x-header>